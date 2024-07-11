//#region Настройка сообщений от Fancybox
$.fancybox.defaults.i18n.ru = {
    CLOSE: "Закрыть",
    NEXT: "Дальше",
    PREV: "Назад",
    ERROR: "<p style='color: red;'>УПС!</p>",
    PLAY_START: "Запуск слайд-шоу",
    PLAY_STOP: "Остановить слайд-шоу",
    FULL_SCREEN: "На полный экран",
    THUMBS: "Миниатюры",
    DOWNLOAD: "Скачать",
    SHARE: "Поделиться",
    ZOOM: "Приблизить"
}
$.fancybox.defaults.lang = 'ru';
//#endregion


//#region Проверка на название страницы для мобильного адаптива
let projPath = window.location.pathname;
let currPage = projPath.split("/").pop();
console.log( currPage );
$(() => {
    if(currPage != "" && currPage != "index.html" && currPage != "register.html" && currPage != "login.html" && currPage != "profile.html") {
        // adaptive
        const media420 = window.matchMedia('(max-width: 420px)');
        function resize420(e) {
            if(e.matches) {
                $("header:not(.about_route-header, .enter-passengers_about-route)").css('display', 'none');
                $('.mobile-header').css("display", "block");
                if(currPage == 'enter-pass.html') {
                    $(".enter-passengers_header-title").text("");
                }
                if(currPage == 'ticket-apply.html') {
                    $(".enter-passengers_header-title").text("");
                }
            }
            else {
                $("header:not(.about_route-header, .mobile-header)").css('display', 'block');
                $('.mobile-header').css("display", "none");
                if(currPage == 'enter-pass.html') {
                    $(".enter-passengers_header-title").text("Ввод данных пассажира");
                }
                if(currPage == 'ticket-apply.html') {
                    $(".enter-passengers_header-title").text("Получение билета");
                }
            }
        }
        media420.addEventListener('change', resize420);
        resize420(media420);
    }
})
switch(currPage) {
    case "select-train.html":
        // set mobile header title
        $(".mobile-header__page-title").text("Выбор поезда");
        break;
    case "select-vagon.html":
        $(".mobile-header__page-title").text("Выбор вагона (S342)");
        break;
    case "select-place.html":
        $(".mobile-header__page-title").text("Выбор места (1 вагон)");
        break;
    case "enter-pass.html":
        $(".mobile-header__page-title").text("Ввод данных пассажира");
        break;
    case "ticket-apply.html":
        $(".mobile-header__page-title").text("Получение билета");
        break;
    case "login.php":
        $(".header_right").css("display", "none");
        break;
    case "index.html":
        $(".mobile-bottom-filed__footer").css('z-index', "3");
        break;
    case "":
        $(".mobile-bottom-filed__footer").css('z-index', "3");
        break;
}

//#endregion


//#region Initialize DatePicker
$(function() {
    function SetRussianDatePicker() {
        $.datepicker.regional['ru'] = {
            closeText: 'Закрыть',
            prevText: 'Предыдущий',
            nextText: 'Следующий',
            currentText: 'Сегодня',
            monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
            monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
            dayNames: ['Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота'],
            dayNamesShort: ['вс ','пн ','вт ','ср ','чт ','пт ','сб '],
            dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
            weekHeader: 'Не',
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['ru']);
    }
    SetRussianDatePicker();
    $("#route_date").datepicker();
    $("#register-born").datepicker({changeYear: true});
})

//#endregion

//#region Sliders

let PopularRoutesSlider = new Swiper("#PopularRoutesSlider", {
    slidesPerView: 8,
    speed: 1800,
    autoplay: {
        delay: 2500
    },
    loop: false,
    navigation: {
        nextEl: ".slider-slide-next",
        prevEl: ".slider-slide-prev",
    },
    breakpoints: {
        1440: {
            slidesPerView: 6
        },
        1280: {
            slidesPerView: 5
        },
        1024: {
            slidesPerView: 4
        },
        650: {
            slidesPerView: 2
        },
        390: {
            slidesPerView: 1
        }
    }
});
let CitysFactsSlider = new Swiper("#CitysFactsSlider", {
    slidesPerView: 8,
    speed: 1750,
    autoplay: {
        delay: 1500
    },
    loop: false,
    navigation: {
        nextEl: ".slider-slide-next",
        prevEl: ".slider-slide-prev",
    },
    breakpoints: {
        1440: {
            slidesPerView: 6
        },
        1280: {
            slidesPerView: 5
        },
        1024: {
            slidesPerView: 4
        },
        650: {
            slidesPerView: 2
        },
        390: {
            slidesPerView: 1
        }
    }
});

//#endregion

//#region Pages Redirections

//#region redirect on page "Выбор Поезда"
$(function() {
    let SearchTicketsBtn = $(".services-content_inputs_search-btn");
    SearchTicketsBtn.on('click', function() {
        $(location).prop('href', 'select-train.html');
    });
})


//#endregion

//#region redirect on previous page
$(() => {
    $(".mobile-header__prev-page").on('click', () => {
        switch(currPage) {
            case "select-train.html":
                $(location).prop("href", "index.html");
                break;
            case "select-vagon.html":
                $(location).prop("href", "select-train.html");
                break;
            case "select-place.html":
                $(location).prop("href", "select-vagon.html");
                break
            case "enter-pass.html":
                $(location).prop("href", "select-place.html");
                break;
            case "ticket-apply.html":
                $(location).prop("href", "enter-pass.html");
                break;
        }
    })
})


//#endregion

//#endregion


//#region Open Popular Card Info after card click

$(function() {
    const PopularRoutesSlidesWrapper = document.querySelector(".popular_routes-wrapper");
    const PopularRoutesSlidesCard = PopularRoutesSlidesWrapper.querySelectorAll(".popular_routes-slide");
    
    PopularRoutesSlidesCard.forEach((row) => {
        let cardImg = row.querySelector(".slide-img");
        let selectBtn = row.querySelector(".slide-controls_select-city");
        selectBtn.addEventListener("click", () => {
            if($('.services-content').hasClass('open')) {
                $("#b_way").val(row.querySelector(".slide-controls span").innerHTML);
            }
            else {
                $('.services-content').show('slow');
                $('.services-content').toggleClass('open');
                $("#b_way").val(row.querySelector(".slide-controls span").innerHTML);
            }
        })
        cardImg.addEventListener('click', () => {
            let city = row.querySelector(".slide-controls span").innerHTML;
            let place = row.querySelector(".slide-popular-place span").innerHTML;
            let img = row.querySelector(".slide-img img").getAttribute('src');
            // open modal
            $(".route-modal-header__city").text(city);
            $(".route-modal-content__preview img").attr("src", img);
            $(".route-modal-place").text(place);
            $.fancybox.open({
                src: $(".popular-route-modal__container"),
                type: 'html',
                opts: {
                    infobar: false,
                    touch: false,
                    toolbar: false,
                    smallBtn: false,
                    baseClass: 'fancy-modal-container'
                },
            });
        })
    })
})


//#endregion

//#region Open Facts Card Info after card click
$(function() {
    const CityFactsSlidesWrapper = document.querySelector(".citys_facts-wrapper");
    const CityFactsSlidesCard = CityFactsSlidesWrapper.querySelectorAll(".citys_facts-slide");
    let dataArr = []; // массив карточек с городами
    let itemsColors = ['193, 69, 30', '99, 153, 234', '222, 123, 51', '187, 205, 73', '73, 165, 205', '151, 194, 212', '183, 211, 102', '237, 45, 45', '216, 163, 25', '25, 159, 216']; // массив цветов для fade каждой карточки города
    let concatArr = []; // массив для объединения и сопоставления города и цвета для fade блока этого города
    CityFactsSlidesCard.forEach((row) => {
        row.addEventListener('click', (e) => {
            let city = row.querySelector(".slide-text").innerHTML;
            let img = row.querySelector(".slide-img img").getAttribute('src');
            // open modal
            $(".fact-modal-header__city span").text(city);
            $(".fact-modal-content__preview img").attr("src", img);
            $.fancybox.open({
                src: $(".fact-route-modal__container"),
                type: 'html',
                opts: {
                    infobar: false,
                    touch: false,
                    toolbar: false,
                    smallBtn: false,
                    baseClass: 'fancy-modal-container'
                },
            })
        })
        dataArr.push(row.dataset.factcity); // Получение всех карточек городов
    })
    // Назначение цветов для FADE каждой карточки с городом
    
    concatArr.push(dataArr, itemsColors);
    for(let i = 0; i < dataArr.length; i++) {
        CityFactsSlidesCard.item(i).querySelector(".slide-img--fade").style.background = ('linear-gradient(180deg, rgba(255, 255, 255, 0) 7.08%, rgba(' + concatArr[1][i] +', 0.35) 75.83%)');
    }
})


//#endregion

//#region Открытие модального окна в профиле при нажатии на заказ "подробнее"
$(() => {
    const profileOrdersContainer = document.querySelector(".profile-orders__content");
    const profileOrdersItem = profileOrdersContainer.querySelectorAll(".orders-item-info");
    
    profileOrdersItem.forEach((el) => {
        el.addEventListener('click', () => {
            let orderId = el.parentElement.dataset.orderid;
            $.fancybox.open({
                src: $(".profile-order-modal__container"),
                type: 'html',
                opts: {
                    infobar: false,
                    touch: false,
                    toolbar: false,
                    smallBtn: false,
                    baseClass: 'fancy-modal-container'
                },
            })
        })
    })
})



//#endregion


//#region раскрытие складывание блока с заполнением данных о поездке на главной странице

$(function() {
    // При открытии блока
    $(".services-btn").on('click', () => {
        if($('.services-content').hasClass('open')) {
            $('.services-content').hide('slow');
            $('.services-content').removeClass('open');
        }
        else {
            $('.services-content').show('slow');
            $('.services-content').toggleClass('open');
            //#region Живой поиск городов

            // массив городов
            let cityList = ["Нижний Тагил", "Екатеринбург"];
            // Перебор элементов массива городов
            cityList.forEach((elem) => {
                // Добавление в список элементов с названием города
                $(".route-select-citys__list ul").append("<li class='citys__list-item'>" + elem + "</li>");
                // Обработка при нажатии на выбранный город
                const CitysListItemsContainer = document.querySelector(".route-select-citys__list");
                const CitysListItemsContent = CitysListItemsContainer.querySelectorAll(".citys__list-item");
                CitysListItemsContent.forEach((el) => {
                    el.addEventListener('click', () => {
                        // Вывод значение выбранного элемента
                        console.log(el.innerHTML);
                        // Установление значение выбранного города в поле ввода, которое было активировано
                        $(".first-line").find("label.active input").val(el.innerHTML);
                        $(".first-line .text_input-label").removeClass("active");
                        $(".route-select-citys__list").css("display", "none");
                    })
                })
            })
            // При нажатии на поля поиска
            const RouteSelectContainer = document.querySelector(".first-line");
            const RouteSelectItem = RouteSelectContainer.querySelectorAll(".text_input-inp");
            RouteSelectItem.forEach((el) => {
                el.addEventListener("click", () => {
                    let activeElemPos = el.getBoundingClientRect();
                    console.log(activeElemPos.width); 
                    $(".route-select-citys__list").css({"display": "block", "width": activeElemPos.width});
                    if(el.parentElement.classList.contains('active')) {
                    }
                    else {
                        $(".first-line .text_input-label").removeClass("active");
                        el.parentElement.classList.add('active');
                        $(".route-select-citys__list").appendTo($(".first-line label.active").parent());
                    }
                })
            })
            //#endregion
        }
    })
    $(window).resize(() => {
        $(".route-select-citys__list").width($('.first-line label.active').width() - 12)
    })
    
})


//#endregion

//#region Смена путей следования А - Б, Б - А

$(function() {

    $('.way_change-btn').on('click', () => {
        if($('#a_way').val() == "" || $("#b_way").val() == ""){
            return false;
        }
        else {
            let a_way = $('#a_way').val();
            let b_way = $("#b_way").val();
            let temp = b_way;
            $("#b_way").val(a_way);
            $("#a_way").val(temp);
        }
        
    })

})

//#endregion

//#region счетчик количества пассажиров на главной странице

$(function() {
    $("#adults-count").prop('readonly', true);
    $("#child-count").prop('readonly', true);
    $("#child-count").val("0");
    $("#adults-count").val("0");

    // plus
    $('.adult-plus, .child-plus').on('click', (e) => {
        if(e.target.classList.contains('child-plus')) {
            let val = $("#child-count").val();
            val++;
            $("#child-count").val(val);
        }
        else if(e.target.classList.contains('adult-plus')) {
            let val = $("#adults-count").val();
            val++;
            $("#adults-count").val(val);
        }
    })
    // minus
    $('.adult-minus, .child-minus').on('click', (e) => {
        if(e.target.classList.contains('child-minus')) {
            let val = $("#child-count").val();
            if(val <= 0) {
                return false;
            }
            else {
                val--;
                $("#child-count").val(val);
            }
        }
        else if(e.target.classList.contains('adult-minus')) {
            let val = $("#adults-count").val();
            if(val <= 0) {
                return false;
            }
            else {
                val--;
                $("#adults-count").val(val);
            }
        }
    })
})

//#endregion


//#region Модальные окна
$(function() {
    // закрытие модалок
    $(".modal-close").on('click', () => {
        $.fancybox.close();
    });
    // при получении билета. перенаправить на гл страницу
    $(".order-confirm-modal__ok").on('click', () => {
        $.fancybox.close();
        $(location).prop('href', 'index.html');
    })
    // Окно авторизации/регистрации в шапке
    $('.header_profile-btn').on('click', () => {
        // Открытие модалки
        $.fancybox.open($('.autorize-modal'), {
            smallBtn: false,
            toolbar: false,
            touch: false,
            animationDuration: 150,
            parentEl: '.header-modals',
            baseClass: "fancy-modal-container"
        })
    });
    // Открытие формы обратной связи
    $('.feedback-modal--open').on('click', () => {
        $.fancybox.open($(".feedback-modal"), {
            smallBtn: false,
            touch: false,
            toolbar: false,
            baseClass: 'fancy-modal-container'
        })
    })
    // Политика конфиденциальности
    $(".privacy-policy-modal--open").on('click', () => {
        $.fancybox.open($('.privacy-policy-modal__container'), {
            baseClass: 'modals',
            smallBtn: false,
            touch: false,
            toolbar: false,
            baseClass: 'fancy-modal-container'
        })
    })
    // Получение билета
    $(".ticket-apply__next-btn").on('click', () => {
        $.fancybox.open($('.order-confirm-modal__container'), {
            baseClass: 'modals',
            smallBtn: false,
            touch: false,
            toolbar: false,
            clickSlide: false,
            clickOutside: false,
            baseClass: 'fancy-modal-container'
        })
    })
})
//#endregion

//#region маски для ввода

$(function() {
    $("#register-born").inputmask("99.99.9999");
    $("#register-passp").inputmask("9999-999999");
    $("#pass-passp").inputmask("9999-999999");
    $("#register-tel").inputmask("+7(999)999-9999");
    $('#pass-tel').inputmask("+7(999)999-9999");
})

//#endregion


//#region Выбор мест

$(function() {

})

//#endregion

//#region Генерация QR
$(() => {
    let qrGen = new QRCode($(".card-qr_code__content"), {
        width: 200,
        height: 200
    })
    function GenerateQR (data) {
        qrGen.GenerateQR(data);
    }
    GenerateQR('text');
})


//#endregion

//#region Бургер-меню

$(".header-burger-btn--open").on('click', () => {
    $(".burger-menu").toggleClass('active');
})
$(".burger-menu--close").on("click", () => {
    $(".burger-menu").removeClass('active');
})
$(".burger-menu__fade").on('click', () => {
    $(".burger-menu").removeClass('active');
})
//#endregion


//#region Валидация форм
$(() => {
    jQuery.validator.addMethod("checkMask", function(value, element) {
        return /\+\d{1}\(\d{3}\)\d{3}-\d{4}/g.test(value);
    });
    $("#privacy").on('click', () => {
        if($("#privacy").is(":checked")) {
            $(".feedback-modal__send").prop("disabled", false);
        }
        else {
            $(".feedback-modal__send").prop("disabled", true);
        }
    })
    // Валидация формы обратной связи
    $('#feedback-form').validate({
        errorClass: 'validate-error',
        rules: {
            name: {
                minlength: 2,
                required: true
            },
            message: {
                required: true
            },
            mail: {
                email: true,
                required: true
            }
        },
        messages: {
            name: {
                minlength: 'Имя должно содержать более 2 символов',
                required: 'Поле обязательно к заполнению'
            },
            message: {
                required: "Введите ваше сообщение"
            },
            mail: {
                email: "Введен некорректный адрес эл.почты",
                required: "Поле обязательно к заполнению"
            }
        },
        submitHandler: function(form) {
            // backend
            alert("fe");
            $.fancybox.close();
            // thansk window
            // $.fancybox.close({
            //     src: '.call-back_modal'
            // });
            // thanksModal('Спасибо за заявку! <br> Мы вам перезвоним!');
            // // timeout when windows closing
            // setTimeout(() => {
            //     $.fancybox.close();
            // }, 2000)
        }
    });
    // Валидация формы регистрации
    $('#register').validate({
        errorClass: 'validate-error',
        rules: {
            name: {
                minlength: 2,
                required: true
            },
            sname: {
                minlength: 2,
                required: true
            },
            lname: {
                minlength: 2,
                required: false
            },
            born: {
                minlength: 10,
                required: true
            },
            passp: {
                minlength: 10,
                required: true
            },
            tel: {
                checkMask: true,
                required: false
            },
            mail: {
                email: true,
                required: false
            },
            passw: {
                minlength: 8,
                required: true
            }
        },
        messages: {
            name: {
                minlength: 'Имя должно содержать более 2 символов',
                required: 'Поле обязательно к заполнению'
            },
            sname: {
                minlength: "Фамилия должна быть более 2 символов",
                required: "Поле обязательно к заполнению"
            },
            lname: {
                minlength: "Отчество должно быть более 2 символов"
            },
            born: {
                minlength: "Заполните дату точнее",
                required: "Поле обязательно к заполнению"
            },
            passp: {
                minlength: "Введите данные в форме 'серия-номер'",
                required: "Поле обязательно к заполнению"
            },
            tel: {
                checkMask: "Введен неверный номер телефона",
            },
            mail: {
                email: "Введен некорректный адрес эл. почты"
            },
            passw: {
                minlength: "Пароль должен быть более 8 символов",
                required: "Поле обязательно к заполнению"
            }
        },
        submitHandler: function(form) {
            // backend
            alert("fe");
            // thansk window
            // $.fancybox.close({
            //     src: '.call-back_modal'
            // });
            // thanksModal('Спасибо за заявку! <br> Мы вам перезвоним!');
            // // timeout when windows closing
            // setTimeout(() => {
            //     $.fancybox.close();
            // }, 2000)
        }
    });
})


//#endregion






