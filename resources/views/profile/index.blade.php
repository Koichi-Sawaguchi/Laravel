@extends('layouts.practice')

@section('content')
      <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
            <h1>マイ プロフィール</h1>
            @if(!is_null($headline))
              <div class="form-group">
                  <label class="col-md-3" for="name">名前(name)</label>
                   <p class="name">{{ str_limit($headline->name, 140) }}</p>
            
                <div class="form-group">
                  <label class="col-md-3" for="gender">性別(gender)</label>
                   <p class="gender">{{ str_limit($headline->gender, 150) }}</p>
            
                  <div class="form-group">
                  <label class="col-md-3" for="hobby">趣味(hobby)</label>
                   <p class="hobby">{{ str_limit($headline->hobby, 160) }}</p>
            
                    <div class="form-group">
                  <label class="col-md-6" for="introduction">自己紹介(introduction)</label>
                   <p class="introduction">{{ str_limit($headline->introduction, 650) }}</p>
                    </div>
                  </div>
                 </div>
               </div>
             @endif
             </div>
        </div>
       </div>
@endsection