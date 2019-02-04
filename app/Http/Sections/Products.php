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
 * Class Products
 *
 * @property \App\Models\Product $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Products extends Section
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
            AdminColumn::text('id', 'ID'),
            AdminColumn::text('name', 'Name'),
            AdminColumn::text('name_ua', 'Name UA'),
            AdminColumn::text('name_en', 'Name EN'),
            AdminColumn::text('categories_id', 'Category'),
            AdminColumn::text('view', 'View')
        ])
            ->setNewEntryButtonText('Добавить продукт')
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
                    AdminFormElement::select('categories_id')
                        ->setModelForOptions(new \App\Models\Categorie())
                        ->setDisplay('name')
                        ->setLabel('Category')
                        ->required()
                ], 6)
                ->addColumn([
                    AdminFormElement::image('image', 'Image (960x500)')
                        ->setUploadSettings([
                            'orientate' => [],
                            'resize' => [960, null, function ($constraint) {
                                $constraint->upsize();
                                $constraint->aspectRatio();
                            }],
                            /*'fit' => [960, 500, function ($constraint) {
                                $constraint->upsize();
                                $constraint->aspectRatio();
                            }]*/
                        ])
                        ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                            return 'images/uploads/products';
                        })
//                        ->setDefaultValue('images/uploads/no_img.jpg')
                ], 3)
                ->addColumn([
                    AdminFormElement::ckeditor('text', 'Text')->required()
                ], 12)
                ->addColumn([
                    AdminFormElement::ckeditor('text_ua', 'Text UA')->required()
                ], 12)
                ->addColumn([
                    AdminFormElement::ckeditor('text_en', 'Text EN')->required()
                ], 12)
                ->addColumn([
                    AdminFormElement::images('images', 'Images')
                        ->setUploadSettings([
                            'orientate' => [],
                            'resize' => [1080, null, function ($constraint) {
                                $constraint->upsize();
                                $constraint->aspectRatio();
                            }],
                            'fit' => [1080, 680, function ($constraint) {
                                $constraint->upsize();
                                $constraint->aspectRatio();
                            }]
                        ])
                        ->storeAsComaSeparatedValue(),
                ], 12)

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
