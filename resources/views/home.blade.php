@extends('layouts.app')

@section('content')
<div id="main">
    <div class="inner">
        <header>
            <h4>WELCOME TO RCCG LAGOS PROVINCE 51 - ONLINE OFFERING</h4>
            <h1>BECOME A PARTNER WITH GOD</h1>
            <p>RCCG LP51 Online offering is secured platform with additional integration to an International payment platform via Paystack payment gateway, It accept payments from all members across the globe, you can pay in <strong>Naira</strong> or <strong>USD</strong>. As you continue to stretch your hand onto the work of God, The Almighty will continue to increase in you in hundred folds. Amen</p>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </header>
        <section class="tiles">
            @foreach($parishes as $parish)
            <?php $rand = rand(1, 9) ?>
            <article class="style{{$rand}}">
                <span class="image">
                    <img src="{{ asset('public/images/pic0'.$rand.'.jpg') }}" alt="" />
                </span>
                <a href="{{ route('parishes.show', $parish->slug) }}">
                    <h2>{{$parish->title}}</h2>
                    <div class="content">
                        <p>{{ Str::limit($parish->description, 200, ' (...)') }}</p>
                    </div>
                </a>
            </article>
            @endforeach
            <!-- <article class="style2">
                <span class="image">
                    <img src="{{ asset('public/images/pic02.jpg') }}" alt="" />
                </span>
                <a href="generic.html">
                    <h2>Lorem</h2>
                    <div class="content">
                        <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                    </div>
                </a>
            </article>
            <article class="style3">
                <span class="image">
                    <img src="{{ asset('public/images/pic03.jpg') }}" alt="" />
                </span>
                <a href="generic.html">
                    <h2>Feugiat</h2>
                    <div class="content">
                        <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                    </div>
                </a>
            </article>
            <article class="style4">
                <span class="image">
                    <img src="{{ asset('public/images/pic04.jpg') }}" alt="" />
                </span>
                <a href="generic.html">
                    <h2>Tempus</h2>
                    <div class="content">
                        <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                    </div>
                </a>
            </article>
            <article class="style5">
                <span class="image">
                    <img src="{{ asset('public/images/pic05.jpg') }}" alt="" />
                </span>
                <a href="generic.html">
                    <h2>Aliquam</h2>
                    <div class="content">
                        <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                    </div>
                </a>
            </article>
            <article class="style6">
                <span class="image">
                    <img src="{{ asset('public/images/pic06.jpg') }}" alt="" />
                </span>
                <a href="generic.html">
                    <h2>Veroeros</h2>
                    <div class="content">
                        <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                    </div>
                </a>
            </article>
            <article class="style2">
                <span class="image">
                    <img src="{{ asset('public/images/pic07.jpg') }}" alt="" />
                </span>
                <a href="generic.html">
                    <h2>Ipsum</h2>
                    <div class="content">
                        <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                    </div>
                </a>
            </article>
            <article class="style3">
                <span class="image">
                    <img src="{{ asset('public/images/pic08.jpg') }}" alt="" />
                </span>
                <a href="generic.html">
                    <h2>Dolor</h2>
                    <div class="content">
                        <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                    </div>
                </a>
            </article>
            <article class="style1">
                <span class="image">
                    <img src="{{ asset('public/images/pic09.jpg') }}" alt="" />
                </span>
                <a href="generic.html">
                    <h2>Nullam</h2>
                    <div class="content">
                        <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                    </div>
                </a>
            </article>
            <article class="style5">
                <span class="image">
                    <img src="{{ asset('public/images/pic10.jpg') }}" alt="" />
                </span>
                <a href="generic.html">
                    <h2>Ultricies</h2>
                    <div class="content">
                        <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                    </div>
                </a>
            </article>
            <article class="style6">
                <span class="image">
                    <img src="{{ asset('public/images/pic11.jpg') }}" alt="" />
                </span>
                <a href="generic.html">
                    <h2>Dictum</h2>
                    <div class="content">
                        <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                    </div>
                </a>
            </article>
            <article class="style4">
                <span class="image">
                    <img src="{{ asset('public/images/pic12.jpg') }}" alt="" />
                </span>
                <a href="generic.html">
                    <h2>Pretium</h2>
                    <div class="content">
                        <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                    </div>
                </a>
            </article> -->
        </section>
    </div>
</div>
@endsection
