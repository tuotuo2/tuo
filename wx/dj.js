function dj(){
    $.ajax({
        url:'http://www.yzlc168.com/gladunion/titckw.php',
        type:'POST',
        dataType:'json'
    }).success(function(data){
        // $('#urls').append('');
        // alert(data)
        console.log(data);
        window.location.href = ""+data+"";
    })
}
