<!-- resources/views/main-menu.blade.php -->
@extends('layouts.app')

@section('content')
<h1>メニュー</h1>
<p>Welcome, {{ Auth::user()->name }}!</p>
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">受注処理</button>
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
                <button class="nav-link" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="false">出荷処理</button>
            </li>

            <!-- More tabs as needed -->
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <!-- Content for Tab 1 -->
                <form>
                        <div class="col-md-2">
                            <label for="exampleInput1" class="form-label">データNo</label>
                            <input type="text" class="form-control" id="exampleInput1">
                        </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="exampleInput1" class="form-label">日付</label>
                            <input type="text" class="form-control" id="exampleInput1">
                        </div>
                        <div class="col-md-3">
                            <label for="exampleInput2" class="form-label">製品コード</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInput2" class="form-label">製品名</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="exampleInput2" class="form-label">ロット数</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput2" class="form-label">受注数量</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput3" class="form-label">納期</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInput2" class="form-label">備考</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                    </div>
                    <!-- More inputs as needed -->
                </form>
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <!-- Content for Tab 2 -->
                <form>
                    <div class="col-md-2">
                            <label for="exampleInput1" class="form-label">データNo</label>
                            <input type="text" class="form-control" id="exampleInput1">
                        </div>
 
                    <div class="row">
                        <div class="col-md-2">
                            <label for="exampleInput2" class="form-label">材料発注日</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput3" class="form-label">発注数量</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="exampleInput2" class="form-label">寸法</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput2" class="form-label">現場指示日</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput2" class="form-label">工程数</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput2" class="form-label">ショット数</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="exampleInput2" class="form-label">材料入荷予定日１</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput2" class="form-label">材料入荷予定日２</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput2" class="form-label">材料入荷予定日３</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput2" class="form-label">備考</label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                    </div>


                    <!-- More inputs as needed -->
                </form>

            </div>
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <!-- Content for Tab 2 -->
                <form>
                        <div class="col-md-2">
                            <label for="exampleInput1" class="form-label">データNo</label>
                            <input type="text" class="form-control" id="exampleInput1">
                        </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInput3" class="form-label">外注先1</label>
                            <input type="text" class="form-control" id="exampleInput3">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInput4" class="form-label">外注先1納品日</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInput4" class="form-label">外注先1納期</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInput3" class="form-label">外注先2</label>
                            <input type="text" class="form-control" id="exampleInput3">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInput4" class="form-label">外注先2納品日</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInput4" class="form-label">外注先2納期</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInput3" class="form-label">外注先3</label>
                            <input type="text" class="form-control" id="exampleInput3">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInput4" class="form-label">外注先3納品日</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInput4" class="form-label">外注先3納期</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInput3" class="form-label">外注先4</label>
                            <input type="text" class="form-control" id="exampleInput3">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInput4" class="form-label">外注先4納品日</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInput4" class="form-label">外注先4納期</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                    </div>
                    <!-- More inputs as needed -->
                </form>
            </div>
            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                <!-- Content for Tab 2 -->
                <form>
                        <div class="col-md-2">
                            <label for="exampleInput1" class="form-label">データNo</label>
                            <input type="text" class="form-control" id="exampleInput1">
                        </div>

                        <div class="row">
                        <div class="col-md-2">
                            <label for="exampleInput3" class="form-label">生産日</label>
                            <input type="text" class="form-control" id="exampleInput3">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput4" class="form-label">生産数量本社</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput4" class="form-label">生産数量第二工場</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput4" class="form-label">生産数量倉庫</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput4" class="form-label">合計生産数量</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                    </div>
                    <!-- More inputs as needed -->
                </form>
            </div>
            <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                <!-- Content for Tab 2 -->
                <form>
                        <div class="col-md-2">
                            <label for="exampleInput1" class="form-label">データNo</label>
                            <input type="text" class="form-control" id="exampleInput1">
                        </div>

                        <div class="row">
                        <div class="col-md-2">
                            <label for="exampleInput3" class="form-label">出荷日</label>
                            <input type="text" class="form-control" id="exampleInput3">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput4" class="form-label">出荷数量本社</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput4" class="form-label">出荷数量第二工場</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput4" class="form-label">出荷数量倉庫</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInput4" class="form-label">合計出荷数量</label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                    </div>
                    <!-- More inputs as needed -->
                </form>
            </div>
            <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                <!-- Content for Tab 2 -->
                <form>
                        <div class="col-md-2">
                            <label for="exampleInput1" class="form-label">データNo</label>
                            <input type="text" class="form-control" id="exampleInput1">
                        </div>

                    <div class="mb-3">
                        <label for="exampleInput3" class="form-label">Example input 11</label>
                        <input type="text" class="form-control" id="exampleInput3">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput4" class="form-label">Example input 12</label>
                        <input type="text" class="form-control" id="exampleInput4">
                    </div>
                    <!-- More inputs as needed -->
                </form>
            </div>
            <!-- More tab contents as needed -->
        </div>
        
        <div class="footer">
            <button type="submit" class="btn btn-primary">登録</button>
            <button type="button" class="btn btn-secondary">修正</button>
        </div>
    </div>
@endsection
