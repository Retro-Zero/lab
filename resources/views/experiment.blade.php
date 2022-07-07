@extends('layouts.app')
@section('content')
    @parent
    <section class="content">
        <img src="./media/image.jpg" alt="title" class="cover">

        <h1 class="title">{{ $experiment->title }}</h1>

        <p class="description">
            {{ $experiment->description }}
        </p>

        <div class="created-info">
            <p class="author"><i class="fa fa-user"></i> آرین کریمی</p>

            <p class="date"><i class="fa fa-calendar"></i> {{ date('d/m/Y'), strtotime($experiment->created_at)}}</p>
        </div>
    </section>

    <section class="comments">
        <p class="message">لطفا ابتدا وارد شوید یا ثبت‌نام کنید</p>

        <form action="#" method="post" class="comment-form">
            <textarea name="" id="" class="comment-text" placeholder="نظر خود را بنویسید"></textarea>
            <input type="submit" value="ثبت">
        </form>

        <div class="comment">
            <p class="author">اصغر میگه :</p>
            <p class="comment">
                پیر مردی هر روز تو محله می دید پسر کی با کفش های پاره و پای برهنه با توپ پلاستیکی فوتبال بازی می کند،
                روزی رفت ی کتانی نو خرید و اومد و به پسرک گفت بیا این کفشا رو بپوش…پسرک کفشا رو پوشید و خوشحال رو به پیر
                مرد کرد و گفت: شما خدایید؟! پیر مرد لبش را گزید و گفت نه! پسرک گفت پس دوست خدایی، چون من دیشب فقط به خدا
                گفتم كه کفش ندارم…
            </p>
        </div>

        <div class="comment">
            <p class="author">اصغر میگه :</p>
            <p class="comment">
                پیر مردی هر روز تو محله می دید پسر کی با کفش های پاره و پای برهنه با توپ پلاستیکی فوتبال بازی می کند،
                روزی رفت ی کتانی نو خرید و اومد و به پسرک گفت بیا این کفشا رو بپوش…پسرک کفشا رو پوشید و خوشحال رو به پیر
                مرد کرد و گفت: شما خدایید؟! پیر مرد لبش را گزید و گفت نه! پسرک گفت پس دوست خدایی، چون من دیشب فقط به خدا
                گفتم كه کفش ندارم…
            </p>
        </div>
    </section>
@endsection
