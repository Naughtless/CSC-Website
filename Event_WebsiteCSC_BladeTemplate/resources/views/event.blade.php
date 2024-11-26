<div class="button-container">
    <div class="buttons">
        <button class="upcomming">UPCOMMING</button>
        <button class="orange">Lorem</button>
    </div>
</div>
<div class="flex-box"> 
    @if($event)
    @foreach($event as $e)
    <div class="parent-box">
        <img src="{{$e['image']}}" alt="logo" class="image">
        <div class="child-box">
            <div class="title">
                <h2>{{$e['title']}}</h2>
            </div>
            <div class="description">
                {{$e['description']}}
            </div>
            <div class="button">
                 <button><a href="{{$e['link']}}">See more</a></button>
            </div>
        </div>
    </div> 
    @endforeach    
    @endif    
</div>
