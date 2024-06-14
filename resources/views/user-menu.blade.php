<!-- resources/views/main-menu.blade.php -->
@extends('layouts.app')

@section('content')
<h1>メニュー</h1>
<p>Welcome, {{ Auth::user()->name }}!</p>
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            @can('view-any')
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">受注処理</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">材料発注処理</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">外注手配</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="false">生産処理</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="false">出荷処理</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="false">外注先専用</button>
            </li>
            @elsecan('view-製造')
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="false">生産処理</button>
            </li>
            @elsecan('view-出荷')
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="false">出荷処理</button>
            </li>
            @elsecan('view-外注')
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="false">外注先専用</button>
            </li>
            @endcan
            <!-- More tabs as needed -->
        </ul>
        <div class="tab-content" id="myTabContent">
            @can('view-any')
            @include('tabs.tab1-content')
                @include('tabs.tab2-content')
                @include('tabs.tab3-content')
                @include('tabs.tab4-content')
                @include('tabs.tab5-content')
                @include('tabs.tab6-content')
            @elsecan('view-製造')
                @include('tabs.tab4-content')
            @elsecan('view-出荷')
                @include('tabs.tab5-content')
            @elsecan('view-外注')
                @include('tabs.tab6-content')
            @endcan
        </div>
        <div class="footer">
            <button type="submit" class="btn btn-primary">登録</button>
            <button type="button" class="btn btn-secondary">修正</button>
        </div>
    </div>
@endsection


