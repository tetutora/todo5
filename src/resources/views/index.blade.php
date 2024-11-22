@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('/index.css') }}">
@endsection

@section('content')
<div class="todo__content">
    <div class="alert-message">
        <div class="alert-message__success">Todoを作成しました</div>
    </div>
    <div class="todo-form">
        <div class="create-form">
            <form action="" method="post">
                <div class="create-form__input">
                    <input class="create-form__input-text" type="text" name="" id="">
                </div>
                <div class="create-form__button">
                    <button class="create-form__button-submit" type="submit">作成</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection