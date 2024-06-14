@extends('layouts.app')

@section('content')
<h1>メニュー</h1>
<p>Welcome, {{ Auth::user()->name }}!</p>

<!-- ユーザーのロールを JSON 形式で格納 -->
<div id="userRoles" style="display: none;">{{ json_encode(Auth::user()->getRoleNames()) }}</div>

<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        @can('view-any')
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="false">受注処理</button>
        </li>
        @endcan

        @can('view-any')
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">材料発注処理</button>
        </li>
        @endcan

        @can('view-外注')
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">外注手配</button>
        </li>
        @endcan

        @can('view-製造')
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="false">生産処理</button>
        </li>
        @endcan

        @can('view-出荷')
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="false">出荷処理</button>
        </li>
        @endcan

        @can('view-any')
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="false">その他</button>
        </li>
        @endcan
    </ul>
    <div class="tab-content" id="myTabContent">
        @include('tabs.tab1')
        @include('tabs.tab2')
        @include('tabs.tab3')
        @include('tabs.tab4')
        @include('tabs.tab5')
        @include('tabs.tab6')
    </div>
</div>

@vite('resources/js/tabControl.js')
@endsection
