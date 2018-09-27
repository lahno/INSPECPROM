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
 * Class Categories
 *
 * @property \App\Models\Categorie $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Categories extends Section
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
            AdminColumn::text('type', 'Type')
        ])
            ->setNewEntryButtonText('Новая категория')
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
                    AdminFormElement::select('type', 'Type')->setEnum(['product', 'post', 'page', 'other'])->setSortable(false)->setDefaultValue('other'),
                    AdminFormElement::select('parent_id')
                        ->setModelForOptions(new \App\Models\Categorie())
                        ->setDisplay('name')
                        ->setLabel('Parent category')
                        ->exclude([$id])
                ], 6)
                ->addColumn([
                    AdminFormElement::image('image', 'Image')
                        ->setUploadSettings([
                            'orientate' => [],
                            'resize' => [206, null, function ($constraint) {
                                $constraint->upsize();
                                $constraint->aspectRatio();
                            }],
                            'fit' => [206, 174, function ($constraint) {
                                $constraint->upsize();
                                $constraint->aspectRatio();
                            }]
                        ])
                        ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                            return 'images/uploads/category';
                        })
//                        ->setDefaultValue('images/uploads/no_img.jpg')
                ], 3)
                ->addColumn([
                    AdminFormElement::textarea('desc', 'Описание')
                ], 12)
                ->addColumn([
                    AdminFormElement::textarea('desc_ua', 'Описание UA')
                ], 12)
                ->addColumn([
                    AdminFormElement::textarea('desc_en', 'Описание EN')
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
