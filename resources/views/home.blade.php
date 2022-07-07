@extends('layouts.app')

@section('content')
    @parent
    <section id="home">
        <div class="label" id="physic" onclick="openLayer('physic-layer')">
            <p>فیزیک</p>
        </div>
        <div class="label" id="chemistry" onclick="openLayer('chemistry-layer')">
            <p>شیمی</p>
        </div>
        <div class="label" id="biology" onclick="openLayer('biology-layer')">
            <p>زیست</p>
        </div>
        <p class="title">تجربه‌ای بی‌نهایت از<span>آزمایشگاه</span></p>
        <img src="./media/circle.svg" alt="circle" class="circle">
        <img src="./media/illusration.svg" alt="illustration" class="illustration">
        <div class="field-sheet" id="physic-layer">
            <i class="fa fa-times close-btn" onclick="closeLayer('physic-layer')"></i>
            <ul>
                <h1 class="field-name">فیزیک</h1>
                <p>کلاس چندمی؟</p>
                <a href="#" class="grade">دهم</a>
                <a href="#" class="grade">یازدهم</a>
            </ul>
        </div>
        <div class="field-sheet" id="chemistry-layer">
            <i class="fa fa-times close-btn" onclick="closeLayer('chemistry-layer')"></i>
            <ul>
                <h1 class="field-name">شیمی</h1>
                <p>کلاس چندمی؟</p>
                <a href="#" class="grade">دهم</a>
                <a href="#" class="grade">یازدهم</a>
            </ul>
        </div>
        <div class="field-sheet" id="biology-layer">
            <i class="fa fa-times close-btn" onclick="closeLayer('biology-layer')"></i>
            <ul>
                <h1 class="field-name">زیست</h1>
                <p>کلاس چندمی؟</p>
                <a href="#" class="grade">دهم</a>
                <a href="#" class="grade">یازدهم</a>
            </ul>
        </div>
    </section>

    <section id="about">
        <div class="box">
            <p class="description">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده
                شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و
                دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای
                اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
            </p>
            <img src="./media/illustration2.svg" alt="illustration" class="illustration">
        </div>
    </section>

    <section id="experiments" class=".experiments">
        @foreach($latest_experiments as $experiment)
        <div class="experiment">
            <img src="{{ asset('/media/image.jpg') }}" alt="title" class="cover">
            <a href="{{ url('experiment/'.$experiment->id) }}" class="title">{{ $experiment->title }}</a>
            <p class="description">
                {{ $experiment->short_description }}
            </p>
            <p class="date">{{ date('d/m/y', strtotime($experiment->created_at)) }} <i class="fa fa-calendar"></i></p>
        </div>
        @endforeach
    </section>
@endsection
