@component('mail::message')

**<center>Обращение с сайта INSPECPROM</center>**

*Имя:* **{{$name}}**
<br>
*Номер телефона:* **{{$phone}}**
<br>
*Email:* **{{$email}}**
<br>
<br>
*Текст:* **<br>{{$message}}**

<br><br>
*С уважением, {{env('APP_NAME')}}*
@endcomponent
