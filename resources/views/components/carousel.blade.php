@extends('layouts.entry')

@section('content')

<div class="row">
  <div class="col-md-6">
    <h2 class="doc-section-title" id="examples">Basic </h2>
    <div class="doc-example">
      <div id="carouselExampleSlidesOnly" class="carousel slide rounded overflow-hidden" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{  asset('images/products/headphone-1.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{  asset('images/products/iphone-1.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{  asset('images/products/speaker-1.jpg')}}" alt="Third slide">
          </div>
        </div>
      </div>
    </div>
    <div class="copy-code">
      <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
    </div><code class="code" data-code="&lt;div id=&quot;carouselExampleSlidesOnly&quot; class=&quot;carousel slide rounded overflow-hidden&quot; data-ride=&quot;carousel&quot;&gt;
    &lt;div class=&quot;carousel-inner&quot;&gt;
      &lt;div class=&quot;carousel-item active&quot;&gt;
        &lt;img class=&quot;d-block w-100&quot; src=&quot;{{  asset('images/products/headphone-1.jpg')}}&quot; alt=&quot;First slide&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;carousel-item&quot;&gt;
        &lt;img class=&quot;d-block w-100&quot; src=&quot;{{  asset('images/products/iphone-1.jpg')}}&quot; alt=&quot;Second slide&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;carousel-item&quot;&gt;
        &lt;img class=&quot;d-block w-100&quot; src=&quot;{{  asset('images/products/speaker-1.jpg')}}&quot; alt=&quot;Third slide&quot;&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;"></code>
  </div>
  <div class="col-md-6">
    <h2 class="doc-section-title" id="examples">With Controls</h2>
    <div class="doc-example">
      <div id="carouselExampleControls" class="carousel slide rounded overflow-hidden" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{  asset('images/products/headphone-1.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{  asset('images/products/iphone-1.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{  asset('images/products/speaker-1.jpg')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="copy-code">
      <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
    </div><code class="code" data-code="&lt;div id=&quot;carouselExampleControls&quot; class=&quot;carousel slide rounded overflow-hidden&quot; data-ride=&quot;carousel&quot;&gt;
    &lt;div class=&quot;carousel-inner&quot;&gt;
      &lt;div class=&quot;carousel-item active&quot;&gt;
        &lt;img class=&quot;d-block w-100&quot; src=&quot;{{  asset('images/products/headphone-1.jpg')}}&quot; alt=&quot;First slide&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;carousel-item&quot;&gt;
        &lt;img class=&quot;d-block w-100&quot; src=&quot;{{  asset('images/products/iphone-1.jpg')}}&quot; alt=&quot;Second slide&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;carousel-item&quot;&gt;
        &lt;img class=&quot;d-block w-100&quot; src=&quot;{{  asset('images/products/speaker-1.jpg')}}&quot; alt=&quot;Third slide&quot;&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleControls&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
      &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
      &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
    &lt;/a&gt;
    &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleControls&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
      &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
      &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
    &lt;/a&gt;
  &lt;/div&gt;"></code>
  </div>
  <div class="col-md-6">
    <h2 class="doc-section-title" id="examples">Controls With Indicators</h2>
    <div class="doc-example">
      <div id="carouselExampleIndicators" class="carousel slide rounded overflow-hidden" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{  asset('images/products/headphone-1.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{  asset('images/products/iphone-1.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{  asset('images/products/speaker-1.jpg')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="copy-code">
      <button class="btn btn-sm btn-raised-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
    </div><code class="code" data-code="&lt;div id=&quot;carouselExampleIndicators&quot; class=&quot;carousel slide rounded overflow-hidden&quot; data-ride=&quot;carousel&quot;&gt;
    &lt;ol class=&quot;carousel-indicators&quot;&gt;
      &lt;li data-target=&quot;#carouselExampleIndicators&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
      &lt;li data-target=&quot;#carouselExampleIndicators&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
      &lt;li data-target=&quot;#carouselExampleIndicators&quot; data-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
    &lt;/ol&gt;
    &lt;div class=&quot;carousel-inner&quot;&gt;
      &lt;div class=&quot;carousel-item active&quot;&gt;
        &lt;img class=&quot;d-block w-100&quot; src=&quot;{{  asset('images/products/headphone-1.jpg')}}&quot; alt=&quot;First slide&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;carousel-item&quot;&gt;
        &lt;img class=&quot;d-block w-100&quot; src=&quot;{{  asset('images/products/iphone-1.jpg')}}&quot; alt=&quot;Second slide&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;carousel-item&quot;&gt;
        &lt;img class=&quot;d-block w-100&quot; src=&quot;{{  asset('images/products/speaker-1.jpg')}}&quot; alt=&quot;Third slide&quot;&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
      &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
      &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
    &lt;/a&gt;
    &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
      &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
      &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
    &lt;/a&gt;
  &lt;/div&gt;"></code>
  </div>
</div>


@endsection