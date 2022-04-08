function GetMap() {
    $.each($('#uzbekistan > g'), function(index, val) {
        var e = $(this)[0].getBoundingClientRect(),
            trMapL = $('#uzbekistan-map').offset().left,
            trMapT = $('#uzbekistan-map').offset().top,
            trL = $('#uzbekistan-map').width() / 2 - (parseInt(e.left, 0) + parseInt(e.width, 0)) + trMapL,
            trT = $('#uzbekistan-map').height() / 2 - (parseInt(e.top, 0) + parseInt(e.height / 2, 0)) + trMapT;
        $(this).attr('data-transform-left', trL);
        $(this).attr('data-transform-top', trT);
    });
}
$(function() {

    GetMap();
    function SortByName(a, b) {
        var aName = a._all;
        var bName = b._all;
        return ((aName > bName) ? -1 : ((aName > bName) ? 1 : 0));
    }

    function ranking() {
        var ranking_data = {}; // my object
        var ranking_array = []; // my array
        var ranking_list = '';
        var ranking = [];
        var procent = 1;
        $('city').each(function() {
            if($(this).data('region')===''){
            $id = $(this).data('id');
            $name = $(this).data('name');
            $female = $(this).data('female');
            $male = $(this).data('male');
            $all = $(this).data('all');
            ranking_data = {
                _id: $id,
                _name: $name,
                _female: $female,
                _male: $male,
                _all: $all,
            }
            ranking_array.push(ranking_data);
            ranking = ranking_array.sort(SortByName);
        }
        });
        $.each(ranking, function(index, value) {
            if (index === 0) {
                procent = value['_all'];
            }

            ranking_list += '<a href="#' + value['_id'] + '" class="ranking__link">';
            ranking_list += '<div class="rating">';
            ranking_list += '<div class="rating__number"></div>';
            ranking_list += '<div class="rating__details">';
            ranking_list += '<div class="rating__background" style="width: ' + Math.ceil(value['_all'] * 100 / procent) + '%;"></div>';
            ranking_list += '<div class="rating__content">' + value['_all'] + ' ' + value['_name'] + '</div>';
            ranking_list += '</div></div></a>';
        });
        $(ranking_list).appendTo($(".ranking__container"));

    }
    function regions(region_id) {
        var region_data = {}; // my object
        var region_array = []; // my array
        var region_list = '<option>Hududni tanlang...</option>';
        var regionss = [];
        
        $('city[data-region="' + region_id + '"]').each(function() {
           
            $id = $(this).data('id');
            $name = $(this).data('name'); 
            $all = $(this).data('all');          
            region_data = {
                _id: $id,
                _name: $name,
                _all: $all,               
            }
            region_array.push(region_data);
            regionss = region_array.sort(SortByName);
    
        });
        $.each(regionss, function(index, value) {
            region_list += '<option value="#' + value['_id'] + '">' + value['_name'] + '</option>';           
        });
      
        $('#select-city').empty();
        $(region_list).appendTo($("#select-city"));
        $('#select-city').trigger("chosen:updated");
        $('#select-city').chosen({ disable_search: true });
       
    }


    ranking();

    $('#select-region').chosen();
    

    $(document).on({



        mouseenter: function(e) {
            var mapType = $('#uzbekistan-map').attr('data-map') == 'districts' ?
                $(this) : $('#uzbekistan-map').attr('data-map') == 'city' ?
                $(this).parent('g') : $(this).parent('g');
            var trX = mapType[0].getBoundingClientRect().left,
                trY = mapType[0].getBoundingClientRect().top,
                w = mapType[0].getBoundingClientRect().width / 2,
                trMapL = $('#uzbekistan-map').offset().left,
                trMapT = $('#uzbekistan-map').offset().top;
                if($('body').hasClass('zoomed')){
                    var parents = mapType.attr('id');
                } else {
                    var parents = mapType.parent('g').attr('id');
                }
            
            var parent_id = $('city[data-id="' + parents + '"]');
            var region_name = parent_id.attr('data-name');
            var region_female = parent_id.attr('data-female');
            var region_male = parent_id.attr('data-male');
            var region_all = parent_id.attr('data-all');
            var mousex = e.pageX;
            var mousey = e.pageY;
            var tooltip = '';
            tooltip += '<div class="mapboxgl-popup-content">';
            tooltip += '<div>';
            tooltip += '<div class="country-summary">';
            tooltip += '<div class="country-summary__header">';
            tooltip += '<h3 class="country-summary__header-title">' + region_name + '</h3>';
            tooltip += '</div>';
            tooltip += '<table class="country-summary__content">';
            tooltip += '<tbody>';
            tooltip += '<tr>';
            tooltip += '<td>Hududdagi umumiy aholi soni (ming kishi)</td>';
            tooltip += '<td><strong data-colour="green">' + region_all + '</strong></td>';
            tooltip += '</tr>';
            tooltip += '<tr>';
            tooltip += '<td>Hududdagi umumiy ayollar soni (ming kishi)</td>';
            tooltip += '<td><strong data-colour="green">' + region_female + '</strong></td>';
            tooltip += '</tr>';
            tooltip += '<tr>';
            tooltip += '<td>Hududdagi umumiy erkaklar soni (ming kishi)</td>';
            tooltip += '<td><strong data-colour="green">' + region_male + '</strong></td>';
            tooltip += '</tr></tbody></table></div></div></div>';

            $('.map-tooltip').html(tooltip);
            var w2 = parseInt($('.map-tooltip').outerWidth(true), 0) / 2;

            $('.map-tooltip').css({
                'transform': 'translate(' + (((trX + w) - w2) - trMapL) + 'px, ' + (mousey) + 'px)'
            }).addClass('hovered');


        },
        mouseleave: function() {
            if (!$(".mapboxgl-popup-content").is(":hover")) {
                $('.map-tooltip').text('').removeClass('hovered');
            }
        },
        click: function() {
            var mapType = $('#uzbekistan-map').attr('data-map') == 'districts' ?
                $(this) : $('#uzbekistan-map').attr('data-map') == 'city' ?
                $(this).parent('g') : $(this).parent('g');
                if($('body').hasClass('zoomed')){
                    var parents = mapType.attr('id');
                } else {
                    var parents = mapType.parent('g').attr('id');

                    var region_scale = (500 / ($('#'+parents)[0].getBoundingClientRect().width)).toFixed();
                    $('#uzbekistan-map[data-zoom=true] svg').css({
                        'transform': 'scale('+region_scale+') translate(' +( $(this).parent('g').attr('data-transform-left') - 100) + 'px, ' + $(this).parent('g').attr('data-transform-top') + 'px)',
                    }).parents('#uzbekistan-map').addClass('zoomed');
                }
            var parent_id = $('city[data-id="' + parents + '"]');
            var region_name = parent_id.attr('data-name');
            var region_female = parent_id.attr('data-female');
            var region_male = parent_id.attr('data-male');
            var region_all = parent_id.attr('data-all');
            var region_area = parent_id.attr('data-area');
            var region_urban = parent_id.attr('data-urban');
            var region_rural = parent_id.attr('data-rural');
            var region_page = parent_id.attr('data-page');
            var region_capacity = parent_id.attr('data-capacity');
            var region_number_of_families = parent_id.attr('data-number_of_families');
            var region_number_of_mahalla = parent_id.attr('data-number_of_mahalla');
            var region_history = parent_id.attr('data-history');
            var region_geography = parent_id.attr('data-geography');
            var region_population_data = parent_id.attr('data-population_data');
            var region_families_data = parent_id.attr('data-families_data');
            var region_source = parent_id.attr('data-source');

            $('#uzbekistan g').removeClass('selected');
            $(this).addClass('selected');
            $(this).parent('g').addClass('selected');

            
            $('body').addClass('zoomed');
            $('.female_stat').text(region_female);
            $('.male_stat').text(region_male);
            $('.region_name').text(region_name);
            $('.reg_area').text(region_area);
            $('.reg_all').text(region_all);
            $('.reg_male').text(region_male);
            $('.reg_female').text(region_female);
            $('.reg_urban').text(region_urban);
            $('.reg_rural').text(region_rural);
            $('.open_map').attr("href",region_page);
            $('.reg_capacity').html(region_capacity);
            $('.history').html(region_history);
            $('.geography').html(region_geography);
            $('.population_data').html(region_population_data);
            $('.reg_family').html(region_number_of_families);
            $('.reg_mahalla').html(region_number_of_mahalla);
            $('.source').html(region_source);
            
            if($('body').hasClass('zoomed')){
                $('#uzbekistan-map .map-title strong').text($(this).attr('id'));
                regions(mapType.parent('g').attr('id'));
            } else {
                $('#uzbekistan-map .map-title strong').text($(this).parent('g').attr('id'));      
                regions(parents);          
            }
            
        }
    }, '#uzbekistan > g > g');
    // Click ranking click


    $(document).on('click', '.ranking__link', function(e) {
        var regionid = $(this).attr('href');        
            var parents = regionid.substring(1);
            var parent_id = $('city[data-id="' + parents + '"]');
            var region_name = parent_id.attr('data-name');
            var region_female = parent_id.attr('data-female');
            var region_male = parent_id.attr('data-male');
            var region_all = parent_id.attr('data-all');
            var region_area = parent_id.attr('data-area');
            var region_urban = parent_id.attr('data-urban');
            var region_rural = parent_id.attr('data-rural');
            var region_page = parent_id.attr('data-page');
            var region_capacity = parent_id.attr('data-capacity');
            var region_number_of_families = parent_id.attr('data-number_of_families');
            var region_number_of_mahalla = parent_id.attr('data-number_of_mahalla');

            var region_history = parent_id.attr('data-history');
            var region_geography = parent_id.attr('data-geography');
            var region_population_data = parent_id.attr('data-population_data');
            var region_families_data = parent_id.attr('data-families_data');
            var region_source = parent_id.attr('data-source');
            var region_scale = (500 / ($(regionid)[0].getBoundingClientRect().width)).toFixed();
        $('#uzbekistan g').removeClass('selected');
        $(regionid).addClass('selected');
        $(regionid).parent('g').addClass('selected');
        $('#uzbekistan-map[data-zoom=true] svg').css({
            'transform': 'scale('+region_scale+') translate(' + ($(regionid).attr('data-transform-left') - 50) + 'px, ' + $(regionid).attr('data-transform-top') + 'px)',
        }).parents('#uzbekistan-map').addClass('zoomed');
        $('body').addClass('zoomed');
        $('#uzbekistan-map .map-title strong').text($(this).parent('g').attr('id'));
        $('.female_stat').text(region_female);
        $('.male_stat').text(region_male);
        $('.region_name').text(region_name);
        $('.reg_area').text(region_area);
        $('.reg_all').text(region_all);
        $('.reg_male').text(region_male);
        $('.reg_female').text(region_female);
        $('.reg_urban').text(region_urban);
        $('.reg_rural').text(region_rural);
        $('.open_map').attr("href",region_page);
        $('.reg_capacity').html(region_capacity);
        $('.reg_family').html(region_number_of_families);
        $('.reg_mahalla').html(region_number_of_mahalla);

        $('.history').html(region_history);
        $('.geography').html(region_geography);
        $('.population_data').html(region_population_data);
        $('.families_data').html(region_families_data);
        $('.source').html(region_source);
        regions(parents);
        
    });

    $(document).on('change', '#select-region', function(e) {
        var regionid = '#' + $(this).val();       
        var parents = regionid.substring(1);
        var parent_id = $('city[data-id="' + parents + '"]');
        var region_name = parent_id.attr('data-name');
        var region_female = parent_id.attr('data-female');
        var region_male = parent_id.attr('data-male');
        var region_all = parent_id.attr('data-all');
        var region_area = parent_id.attr('data-area');
        var region_urban = parent_id.attr('data-urban');
        var region_rural = parent_id.attr('data-rural');
        var region_page = parent_id.attr('data-page');
        var region_capacity = parent_id.attr('data-capacity');        
        var region_number_of_families = parent_id.attr('data-number_of_families');
        var region_number_of_mahalla = parent_id.attr('data-number_of_mahalla');
        
        var region_history = parent_id.attr('data-history');
        var region_geography = parent_id.attr('data-geography');
        var region_population_data = parent_id.attr('data-population_data');
        var region_families_data = parent_id.attr('data-families_data');
        var region_source = parent_id.attr('data-source');
        var region_scale = (500 / ($(regionid)[0].getBoundingClientRect().width)).toFixed();

        $('#uzbekistan g').removeClass('selected');

        $(regionid).addClass('selected');
        $(regionid).parent('g').addClass('selected');
        $('#uzbekistan-map[data-zoom=true] svg').css({
            'transform': 'scale('+region_scale+') translate(' + ($(regionid).attr('data-transform-left') - 50) + 'px, ' + $(regionid).attr('data-transform-top') + 'px)',
        }).parents('#uzbekistan-map').addClass('zoomed');
        $('body').addClass('zoomed');
        $('#uzbekistan-map .map-title strong').text($(this).parent('g').attr('id'));
        $('.female_stat').text(region_female);
        $('.male_stat').text(region_male);
        $('.region_name').text(region_name);
        $('.reg_area').text(region_area);
        $('.reg_all').text(region_all);
        $('.reg_male').text(region_male);
        $('.reg_female').text(region_female);
        $('.reg_urban').text(region_urban);
        $('.reg_rural').text(region_rural);
        $('.open_map').attr("href",region_page);
        $('.reg_capacity').html(region_capacity);
        $('.reg_family').html(region_number_of_families);
        $('.reg_mahalla').html(region_number_of_mahalla);

        $('.history').html(region_history);
        $('.geography').html(region_geography);
        $('.population_data').html(region_population_data);
        $('.families_data').html(region_families_data);
        $('.source').html(region_source);
        regions(parents);
    });

    $(document).on('change', '#select-city', function(e) {
        var regionid = $(this).val();       
        var parents = regionid.substring(1);
        var parent_id = $('city[data-id="' + parents + '"]');
        var region_name = parent_id.attr('data-name');
            var region_female = parent_id.attr('data-female');
            var region_male = parent_id.attr('data-male');
            var region_all = parent_id.attr('data-all');
            var region_area = parent_id.attr('data-area');
            var region_urban = parent_id.attr('data-urban');
            var region_rural = parent_id.attr('data-rural');
            var region_page = parent_id.attr('data-page');
            var region_capacity = parent_id.attr('data-capacity');
            var region_number_of_families = parent_id.attr('data-number_of_families');
            var region_number_of_mahalla = parent_id.attr('data-number_of_mahalla');
        
            var region_history = parent_id.attr('data-history');
            var region_geography = parent_id.attr('data-geography');
            var region_population_data = parent_id.attr('data-population_data');
            var region_families_data = parent_id.attr('data-families_data');
            var region_source = parent_id.attr('data-source');

        $('#uzbekistan g g').removeClass('selected');
        $(regionid).addClass('selected');       
        $('#uzbekistan-map .map-title strong').text($(this).attr('id'));
        $('.female_stat').text(region_female);
        $('.male_stat').text(region_male);
        $('.region_name').text(region_name);
        $('.reg_area').text(region_area);
        $('.reg_all').text(region_all);
        $('.reg_male').text(region_male);
        $('.reg_female').text(region_female);
        $('.reg_urban').text(region_urban);
        $('.reg_rural').text(region_rural);
        $('.open_map').attr("href",region_page);
        $('.reg_capacity').html(region_capacity);
        $('.reg_family').html(region_number_of_families);
        $('.reg_mahalla').html(region_number_of_mahalla);

        $('.history').html(region_history);
        $('.geography').html(region_geography);
        $('.population_data').html(region_population_data);
        $('.families_data').html(region_families_data);
        $('.source').html(region_source);
    });

    $(document).on('click', '#uzbekistan-map .map-title .map-close', function() {
        $('#uzbekistan-map svg').css({
            'transform': 'scale(1) translate(0, 0)'
        }).parents('#uzbekistan-map').removeClass('zoomed');
    });

    $('.ranking__close').click(function() {
        $('.map-panel--wider').hide();
        $('.chart-toggle').removeClass('active');
        $('.atlas-chart').removeClass('active');
        $('.map-sidebar__ranking').hide();
    });

    $('.country-close').click(function() {

        $('.chart-toggle').addClass('active');
        $('.atlas-chart').addClass('active');
        $("body").removeClass('zoomed');
        $('#uzbekistan-map svg').css({
            'transform': 'scale(1) translate(0, 0)'
        }).parents('#uzbekistan-map').removeClass('zoomed');
    });


    $('.chart-toggle').click(function() {
        $('.map-panel--wider').toggle();
        $(this).toggleClass('active');

    });

    $('.atlas-chart').click(function() {
        $(this).toggleClass('active');
        $('.map-sidebar__ranking').toggle();
    })
    $('.icon-magnifier').click(function() {
        $(this).toggleClass('active');
        $('.country-search__container').toggle();
    })

    $('.button-naked').click(function() {     
        $('.button-naked').removeClass('active');
        $('.country_item').removeClass('active');
        $('.country_item').eq( $(this).index()).addClass('active');
        $(this).addClass('active');
    });


});