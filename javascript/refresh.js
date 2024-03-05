$(document).ready(function(){
    const links = document.querySelectorAll('.link');
    links.forEach(function(elem,idx){
        elem.id = `link${idx}`;
        elem.addEventListener('click',(e)=>{
            const ids = e.target.id
            const link = document.getElementById(ids);
            const link_name = link.innerText.toString().toLowerCase(); 
            console.log(link_name)
            if(elem.id == ids){
                alert('again')
                $.ajax({
                    url: `${link_name}.php`,
                    success: function(res){
                        $('main').html(res);
                    }
                })
                }else{
                    alert('no')
                }
        })
    })
})