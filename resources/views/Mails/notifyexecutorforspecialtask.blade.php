<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-12  mb-3">
                   <h3>Հարգելի {{$show_new_task->special_task_executors->executor_profiles->users->name}}</h3>
                    <p class="m-2">Պատվիրատու {{$show_new_task->users->name}} ուղարկել է հատուկ առաջադրանք {{$show_new_task->title}}</p>

                    <h5>Հարգանքով</h5>
                    <div  style="height:70px;width:300px;display:flex;align-items:center">
                        <img src="{{ $message->embed(public_path().'/images/logo_footer.png') }}" style="width:70px;display:block;">
                    </div>

                </div>
                <div style="margin-top:20px"><button type="button" class="btn" style="background-color: #4B9A2D;border-radius:15px;padding:5px 8px; border:none;outline:none"><a href="https://ligauslug.ru/order_about_page/{{$show_new_task->id}}" style="color:white;text-decoration:none">Перейти по ссылке</a></button></div>

            </div>
        </div>
    </body>
</html>

