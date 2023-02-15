$(function(){
    var code = (Math.random() + 1).toString(36).substring(2);
    var data = $('<div>')
    data.attr('id',code)
    data.css('top','4.5em')
    data.css('position','fixed')
    data.css('right','-1.5em')
    data.css('width','auto')
    data.css('opacity','.5')
    data.css('z-index','9999999')
    data.find('a').css('color','#7e7e7e')
    data.find('a').css('font-weight','bolder')
    data.find('a').css('background','#ebebeb')
    data.find('a').css('padding','1em 3em')
    data.find('a').css('border-radius','50px')
    data.find('a').css('text-decoration','unset')
    data.find('a').css('font-size','11px')
    $('body').append(data)
    var is_right = true
    data.find('a').on('mouseover', function(){
     if(is_right){
       data.css('right','unset')
       data.css('left','-1.5em')
       is_right = false
     }else{
       data.css('left','unset')
       data.css('right','-1.5em')
       is_right = true
     }
    })
  })