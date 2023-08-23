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

<div id="contentEval" class="bg-gray-100 border-8 border-gray-100 w-4/5 h-full mx-auto rounded-lg py-5 px-20 shadow-lg shadow-gray-600">
    {{$slot}}
</div>
