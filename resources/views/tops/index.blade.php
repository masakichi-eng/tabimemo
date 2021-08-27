@extends('layouts.articles_app')

@section('title', '記事一覧')

@section('content')
  @include('nav')
  <div class="container ">
    @foreach($articles as $article)
    @include('articles.card')
    @endforeach
  </div>
  <div class="container">
    <div class="row">
        @foreach ($items as $item)
            <div class="col-3 mb-3">
                <div class="card">
                    <div class="position-relative overflow-hidden">
                        <img class="card-img-top" src="/storage/item-images/{{$item->image_file_name}}">
                        <div class="position-absolute py-2 px-3" style="left: 0; bottom: 20px; color: white; background-color: rgba(0, 0, 0, 0.70)">
                            <i class="fas fa-yen-sign"></i>
                            <span class="ml-1">{{number_format($item->price)}}</span>
                        </div>
                        @if ($item->isStateBought)
                            <div class="position-absolute py-1 font-weight-bold d-flex justify-content-center align-items-end" style="left: 0; top: 0; color: white; background-color: #EA352C; transform: translate(-50%,-50%) rotate(-45deg); width: 125px; height: 125px; font-size: 20px;">
                                <span>SOLD</span>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <small class="text-muted">{{$item->secondaryCategory->primaryCategory->name}} / {{$item->secondaryCategory->name}}</small>
                        <h5 class="card-title">{{$item->name}}</h5>
                    </div>
                    <a href="{{ route('item', [$item->id]) }}" class="stretched-link"></a>
                </div>
            </div>
        @endforeach
    </div>
     <div class="d-flex justify-content-center">
         {{ $items->links() }}
     </div>
</div>
@endsection
