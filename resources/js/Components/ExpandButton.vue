<template>
    <div class="rolling">
    <figure class="ball"><i class="fa fa-bluetooth"></i></figure>
    <span>Let's Share</span>
    <li><a href="#">ON</a></li>
    <li><a href="#">OFF</a></li>
</div>
</template>

<script setup>
import { ref } from 'vue';
const hovered = ref(false)
</script>

<style>
.cc-rockmenu .rolling {
  display: inline-block;
  cursor:pointer;
  width: 52px;
  height: 52px;
  text-align:left;
  overflow: hidden;
  border-radius: 26px;
  background: #b6a14c;
  transition: all 0.3s ease-out;
  white-space: nowrap;
}
.cc-rockmenu .rolling:hover {
  width: 312px;
}

.cc-rockmenu .rolling .rolling_icon {
  float:left;
  z-index: 9;
  display: inline-block;
  width: 52px;
  background: #bbae79;
  height: 52px;
  border-radius: 26px;
  box-sizing: border-box;
  margin: 0 10px 0 0;
}
.cc-rockmenu .rolling .rolling_icon:hover .rolling {
  width: 312px;
}

.cc-rockmenu .rolling i.fa {
    font-size: 24px;
    padding: 15px;
}
.cc-rockmenu .rolling span {
    display: block;
    font-weight: bold;
    padding: 4px 0;
}
.cc-rockmenu .rolling li {
    display: inline-block;
    list-style: outside none none;
}
.cc-rockmenu .rolling li a {
    color: #6a5502;
    padding-right: 5px;
    text-decoration: none;
}
.cc-rockmenu .rolling li a:hover{
	color:#fff;	
}

.cc-rockmenu .rolling li a:before{
   content:"\00bb";
}

.cc-rockmenu .rolling p {
	margin:0;
}

.cc-rockmenu .rolling input[type="text"] {
	width: 175px;
    background: #bbae79 none repeat scroll 0 0;
    border: medium none;
    height: 35px;
    margin: 9px 0;
    padding: 10px;
	color:#fff;
}
.cc-rockmenu .rolling input[type="submit"] {
    background: #6a5502 none repeat scroll 0 0;
    border: medium none;
    color: #fff;
    padding: 9px;
}
</style>

