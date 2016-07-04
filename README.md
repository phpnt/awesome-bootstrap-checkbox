phpNT - Awesome Bootstrap Checkbox
================================

### Описание:
### Позволяет использовать стилизованные чекбоксы и радио-кнопки.
### [DEMO](http://phpnt.com/widget/awesome-bootstrap-checkbox)

------------
### - [Поддержать phpNT](http://phpnt.com/donate/index)
------------

### Социальные сети:
 - [Канал YouTube](https://www.youtube.com/c/phpnt)
 - [Группа VK](https://vk.com/phpnt)
 - [Группа facebook](https://www.facebook.com/Phpnt-595851240515413/)

------------

Установка:

------------

```
php composer.phar require "phpnt/awesome-bootstrap-checkbox" "*"
```
или

```
composer require phpnt/awesome-bootstrap-checkbox
```

или добавить в composer.json файл

```
"phpnt/awesome-bootstrap-checkbox": "*"
```

### Представление:
------------
```php
<?php
use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use phpnt\awesomeBootstrapCheckbox\AwesomeBootstrapCheckboxAsset;

AwesomeBootstrapCheckboxAsset::register($this);
// Теперь, все элементы input с типом checkbox или radio, обернутые в класс checkbox будут стилизованые
// массив элементов
$items = [
    1 => 'Апельсин',
    2 => 'Бочка',
    3 => 'Велосипед',
    4 => 'Гризли',
    5 => 'Дом',
];
// Использование в активной форме
$form = ActiveForm::begin();
    // Вертикальное расположение
    echo $form->field($model, 'id')
        ->checkboxList(
            $items,
            [
                'item' => function ($index, $label, $name, $checked, $value){
                    return '<div class="checkbox-info checkbox">
                                <input type="checkbox" id="check-'.$index.'" name="Model['.$name.'][]" value="'.$value.'" checked>
                                <label for="check-'.$index.'">'.$label.'</label>
                            </div>';
                }
            ]);
    // Горизонтальное расположение
    echo $form->field($model, 'id')
        ->radioList(
            $items,
            [
                'class' => 'radio radio-success radio-inline',
                'item' => function ($index, $label, $name, $checked, $value){
                    return '<input type="radio" id="check-h-'.$index.'" name="Model['.$name.'][]" value="0">
                                <label for="check-h-'.$index.'">'.$label.'</label>';
                }
            ])->inline(true);
ActiveForm::end();

//Использование без активной формы
// Вертикальное расположение
Html::checkboxList('item', null, $items, [
    'class' => 'checkbox checkbox-inline checkbox-warning',
    'item' => function ($index, $label, $name, $checked, $value){
        return '<input type="checkbox" id="check-n-'.$index.'" name="Model['.$name.'][]" value="'.$value.'" checked>
                    <label for="check-n-'.$index.'">'.$label.'</label>';
    }
]);
// Горизонтальное расположение
Html::radioList('item', null, $items, [
    'class' => 'radio radio-danger',
    'item' => function ($index, $label, $name, $checked, $value){
        return '<div><input type="radio" id="check-n2-'.$index.'" name="Model['.$name.'][]" value="'.$value.'">
                    <label for="check-n2-'.$index.'">'.$label.'</label></div>';
    }
]);
?>
```
------------
# Документация (примеры):
## [Awesome Bootstrap Checkbox](http://flatlogic.github.io/awesome-bootstrap-checkbox/demo/)
------------
### Версия:
### 0.0.1
------------
### Лицензия:
### [MIT](https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT)
------------
