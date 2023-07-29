let input=document.getElementById('input');
let image=document.getElementById('images');

input.onchange=function()
{
image.src=URL.createObjectURL(input.files[0]);
};