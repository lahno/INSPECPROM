<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

use AdminColumn;
use AdminForm;
use AdminFormElement;
use AdminColumnEditable;
use AdminDisplayFilter;
use AdminColumnFilter;
use AdminDisplay;

/**
 * Class Gallery
 *
 * @property \App\Models\Gallery $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Gallery extends Section
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display = AdminDisplay::datatables()
            ->setHtmlAttribute('class', 'table-primary');

        $display->setColumns([
            AdminColumn::text('name', 'Name'),
            AdminColumn::text('name_ua', 'Name UA'),
            AdminColumn::text('name_en', 'Name EN'),
            AdminColumn::image('image_small', 'Изображение'),
            AdminColumn::text('view', 'View'),
            AdminColumn::text('type_id', 'Type ID')
        ])
            ->setNewEntryButtonText('Новое изображение')
            ->paginate(20);

        return $display;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('name', 'Name')->required(),
                    AdminFormElement::text('name_ua', 'Name UA')->required(),
                    AdminFormElement::text('name_en', 'Name EN')->required()
                ], 6)
                ->addColumn([
                    AdminFormElement::select('view', 'View')->setEnum(['yes', 'no'])->setDefaultValue('yes'),
                    AdminFormElement::select('type_id')
                        ->setModelForOptions(new \App\Models\TypeGallery())
                        ->setDisplay('display_name')
                        ->setLabel('Тип галереи')
                        ->required()
                ], 6)
                ->addColumn([], 12)
                ->addColumn([
                    AdminFormElement::image('image', 'Image (1200x800)')
                        ->setUploadSettings([
                            'orientate' => [],
                            'resize' => [1200, null, function ($constraint) {
                                $constraint->upsize();
                                $constraint->aspectRatio();
                            }],
                            'fit' => [1200, 800, function ($constraint) {
                                $constraint->upsize();
                                $constraint->aspectRatio();
                            }]
                        ])
                        ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                            return 'images/uploads/gallery';
                        })
//                        ->setDefaultValue('images/uploads/no_img.jpg')
                ], 4)
                ->addColumn([
                    AdminFormElement::image('image_mid', 'Image (400x270)')
                        ->setUploadSettings([
                            'orientate' => [],
                            'resize' => [400, null, function ($constraint) {
                                $constraint->upsize();
                                $constraint->aspectRatio();
                            }],
                            'fit' => [400, 270, function ($constraint) {
                                $constraint->upsize();
                                $constraint->aspectRatio();
                            }]
                        ])
                        ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                            return 'images/uploads/gallery';
                        })
//                        ->setDefaultValue('images/uploads/no_img.jpg')
                ], 4)
                ->addColumn([
                    AdminFormElement::image('image_small', 'Image (140x140)')
                        ->setUploadSettings([
                            'orientate' => [],
                            'resize' => [140, null, function ($constraint) {
                                $constraint->upsize();
                                $constraint->aspectRatio();
                            }],
                            'fit' => [140, 140, function ($constraint) {
                                $constraint->upsize();
                                $constraint->aspectRatio();
                            }]
                        ])
                        ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                            return 'images/uploads/gallery';
                        })
//                        ->setDefaultValue('images/uploads/no_img.jpg')
                ], 4)

        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
