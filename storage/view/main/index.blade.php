@extends('main.layouts.main')

@section('content')
    <div id="page" class="flex-center position-ref full-height" style="height: 90vh
        @if($show == 2)!important;@endif
    ">

        <div class="content">
            <div class="title m-b-md"><a onclick="">@if($show == 2) IT工具箱 @else HongXunPan @endif </a></div>
            <div class="links">
                @if($show == 2)
                    <a href="https://tool.chinaz.com/Tools/Unicode.aspx">Unicode编码</a>
                    <a href="https://www.bejson.com/">Json编码</a>
                    <a href="https://c.runoob.com/compile/1/">PHP调试</a>
                    <br/>
                    <br/>
                    <a href="https://tool.lu/timestamp/">时间戳</a>
                    <a href="https://gitee.com/">码云</a>
                @else
                    <a href="//blog.kangxuanpeng.com">Blog</a>
                    <a href="//me.kangxuanpeng.com">About Me</a>
                    <a href="#">Contact</a>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @if($show == 2)
        <div class="flex-center position-ref" style="margin-bottom: -15vh;">
            <a href="https://beian.miit.gov.cn/" target="_blank">粤ICP备2022145993号-1</a>
        </div>
    @endif
@endsection