$(function(){
    let current_view = 0;
    let count_views = $('.carrousel-home .screens li').length;
    
    // Methodes
    let switch_view = function(id){
        if(id >= 0  &&  id <= count_views)
            current_view = id;
        update_view();
    };

    let init_pagination = function() {
        for(let i=0; i<count_views; i++) {
            let page = $('<li/>');
            $(page).click(function() {switch_view(i);});
            $('.carrousel-home .pagination').append(page);
        }
    };

    let update_view = function(){
        // Calculate the current state
        let view0 = current_view;
        let view1 = current_view+1;
        let view2 = current_view+2;
        if(view0 <= 0) view0 = count_views;
        if(view2 > count_views) view2 = 1;
        $('.carrousel-home .screens li').removeClass('left right');
        $('.carrousel-home .screens li, .carrousel-home .pagination li').removeClass('active');
        $('.carrousel-home .screens li:nth-child('+view1+')').addClass('active');
        $('.carrousel-home .screens li:nth-child('+view0+')').addClass('left');
        $('.carrousel-home .screens li:nth-child('+view2+')').addClass('right');
        $('.carrousel-home .pagination li:nth-child('+view1+')').addClass('active');
    };

    $('.carrousel-home .screens li').click(function(e){
        let classes = $(e.target).attr('class');
        if(classes.includes('left')) {
            if(current_view==0)
                current_view = count_views-1;
            else
                current_view--;
        }
        else if(classes.includes('right')) {
            if(current_view == (count_views-1))
                current_view = 0;
            else
                current_view++;
        }
        update_view();
    });

    $('.content-carrousel .buttons-carrousel button').click(function(e){
        let classes = $(e.target).attr('class');
        if(classes.includes('left')) {
            if(current_view==0)
                current_view = count_views-1;
            else
                current_view--;
        }
        else if(classes.includes('right')) {
            if(current_view == (count_views-1))
                current_view = 0;
            else
                current_view++;
        }
        update_view();
    });
    
    init_pagination();
    update_view();
});