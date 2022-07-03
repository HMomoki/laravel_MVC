<template>
    <form action="#" name="search" method="post">
        <dl class="search">
            <dt><input type="text" name="search" placeholder="検索するテキストを入力..."/></dt>
            <dd><button>Search</button></dd>
        </dl>
    </form>
</template>

<script>
    export default {
    }
</script>

<style>
dl.search{
	position: relative;
}
dl.search dt{
	width:70%;
	padding:3px;
	background-color:#fff;
	border:1px solid #aaa;
	position: absolute;
}
dl.search dt input{
	width:100%;
	height:30px;
	line-height:30px;
	background:none;
	border:none;
}
dl.search dd{
	position: absolute;
	top:0;
	right:0;
	width:28%;
}
dl.search dd button{
	display:block;
	height:40px;
	color:#fff;
	line-height:40px;
	text-align:center;
	border:1px solid #2b71c8;
	background:#2b71c8;
	width: 100%;
}
dl.search dd button:hover {
	background: #4e91e4;
}
</style>