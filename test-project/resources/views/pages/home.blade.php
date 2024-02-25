@extends('layout')
@section('content')
 i am the home page
 @foreach ($cats as $i)
     <div>
        <span>{{$i->name}}</span>
        <span>{{$i->description}}</span>
        <div>Хозяева: 
         @if ($i->users->count() > 0)
            
         <ol>               
            @foreach ($i->users as $user)
               <li>{{$user->name}}</li>
            @endforeach

         </ol>
         @else
         <span>Хозяев нет</span>
         @endif
        </div>

     </div>
     
    
 @endforeach,
    <br>
    @foreach ($users as $i)
    <div>
        <span>{{$i->name}}</span>
        <span>{{$i->email}}</span>
     </div>
    @endforeach

<br>
     <form method="post" >
        @csrf
        <label for="name">Имя</label>
        <input type="text" name="name">
        <br>
        <label for="description">Описание</label>
        <input type="text" name="description">
        <br>
        <button type="submit">Отправить</button>
     </form>
@stop