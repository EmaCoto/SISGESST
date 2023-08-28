<style>
    #contentEval{
        overflow-y: scroll;
        scroll-margin: 20px;
    }
    #contentEval::-webkit-scrollbar{
        background: none;
        width: 10px;
        right: 10px;
    }
    #contentEval::-webkit-scrollbar-thumb {
        background: #50A44E;
        border-radius: 10px;
    }
    #contentEval::-webkit-scrollbar-track-piece{
        margin: 20px 0;
    }
</style>

{{--
    -'sm': '640px'
    -'md': '768px'
    -'lg': '1024px'
    -'xl': '1280px'
    -'2xl': '1536px'
--}}

<div id="contentEval" class="bg-gray-200 border-8 border-gray-200 w-[95%] md:w-[90%] xl:w-5/6 2xl:w-4/5 h-full mx-auto rounded-lg py-5 px-2 md:px-4 xl:px-6 2xl:px-20 shadow-lg shadow-gray-600">
    {{$slot}}
</div>
