<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Магазин</title>
	<link rel="stylesheet" href="styles/main.css">
	<script ENGINE="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="/scripts/burger_click.js"></script>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
	<div class="wrapper">
		<header class="header">
			<div class="container">
				<div class="header__body">
					<a href="#" class="header__logo">
						<img src="img/logo.svg" alt="">
					</a>
					<div class="header__burger">
						<span></span>
					</div>
					<nav class="header__menu">
						<ul class="header__list">
							<li>
								<a href="" class="header__link active">Главная</a>
							</li>
							<li>
								<a href="" class="header__link">Товары</a>
							</li>
							<li>
								<a href="" class="header__link">Отзывы</a>
							</li>
						</ul>
						<div class="header__activity">
							<div class="header__activity-search">
								<a href="">
									<i><img src="img/icons/search.svg" alt="" style="width: 20px; height: 20px" ></i>
								</a>
							</div>
							<div class="header__activity-auth">
								<a href="">
									<i><img src="img/icons/user.svg" alt="" style="width: 25px; height: 25px" ></i>
								</a>
							</div>
							<div class="header__activity-basket">
								<a href="">
									<i><img src="img/icons/cart.svg" alt="" style="width: 25px; height: 25px" ></i>
								</a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header>
		<div class="body__slider swiper-container">
			<div class="wrapper__slider swiper-wrapper">
				<div class="slider__image swiper-slide">
					<div class="fullscreen__section">
						<div class="wrapper__section">
							<div class="section-title">
								Спортивный инвентарь на любой вкус
							</div>
							<div class="section-text">
								
							</div>
						</div>
					</div>
					<img src="img/hero-bg.jpg" class="fullscreen">
					
				</div>
				<div class="slider__image swiper-slide">
					<div class="fullscreen__section">
						<div class="wrapper__section">
							<div class="section-title">
								Штанги, гантели, гири для тяжелого спорта
							</div>
							<div class="section-text">
								
							</div>
						</div>
					</div>
					<img src="img/fon.jpg" class="fullscreen">
				</div>
				<div class="slider__image swiper-slide">
					<div class="fullscreen__section">
						<div class="wrapper__section">
							<div class="section-title">
								Магазин спортивного инвентаря
							</div>
							<div class="section-text">
								sadasdad
							</div>
						</div>
					</div>
					<img src="img/p95O6I.jpg" class="fullscreen">
				</div>

			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-pagination"></div>
		</div>
		<div class="content">
			<div class="description__wrapper">
				<div class="container__description">
					<div class="row">
						<div class="row__column">
							<div class="column__title">
								Качество
							</div>
							<div class="column__text">
								Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non alias nihil voluptatum consequuntur repellat hic recusandae modi impedit, voluptas vel molestiae harum, totam atque consequatur tempora iure iste dicta laborum.	
								Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ipsum dignissimos recusandae tempora repudiandae omnis libero aliquam nihil vero assumenda ipsa, mollitia non officiis architecto, rerum, aperiam explicabo modi esse! Itaque!	
							</div>	
						</div>
						<div class="row__column">
							<div class="column__title">
								Скорость
							</div>
							<div class="column__text">
								Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non alias nihil voluptatum consequuntur repellat hic recusandae modi impedit, voluptas vel molestiae harum, totam atque consequatur tempora iure iste dicta laborum.	
								Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ipsum dignissimos recusandae tempora repudiandae omnis libero aliquam nihil vero assumenda ipsa, mollitia non officiis architecto, rerum, aperiam explicabo modi esse! Itaque!	
							</div>		
						</div>
						<div class="row__column">
							<div class="column__title">
								Надёжность
							</div>
							<div class="column__text">
								Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non alias nihil voluptatum consequuntur repellat hic recusandae modi impedit, voluptas vel molestiae harum, totam atque consequatur tempora iure iste dicta laborum.	
								Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ipsum dignissimos recusandae tempora repudiandae omnis libero aliquam nihil vero assumenda ipsa, mollitia non officiis architecto, rerum, aperiam explicabo modi esse! Itaque!	
							</div>	
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="quality__row">
			<div class="row__wrapper">
				<div class="container__description">
					<div class="row__description">
						<div class="row__description-column">
							<div class="descriprion_column-block">
								<i>
								<img src="img/icons/truck.svg" style="position: relative; width: 40px; height: 40px;" alt="">
								</i>
								<div class="block-info">
									<div class="block-title">
										Бесплатная доставка
									</div>
									<div class="block-text">
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
									</div>
								</div>
							</div>
						</div>
						<div class="row__description-column">
							<div class="descriprion_column-block">
								<i>
								<img src="img/icons/phone.svg" style="position: relative; width: 40px; height: 40px;" alt="">
								</i>
								<div class="block-info">
									<div class="block-title">
										Поддержка 24/7
									</div>
									<div class="block-text">
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
									</div>
								</div>
							</div>
						</div>
						<div class="row__description-column">
							<div class="descriprion_column-block">
								<i>
								<img src="img/icons/arrow.svg" style="position: relative; width: 40px; height: 40px;" alt="">
								</i>
								<div class="block-info">
									<div class="block-title">
										Возврат в течении 30 дней
									</div>
									<div class="block-text">
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product_card">
						<div class="title__box">
							<h2>Наши товары</h2>
						</div>
						<div class="card__box">
							<div class="card__column">
								<div class="item__product">
									<div class="product-img">
										<img src="img/fon.jpg" alt="" style="position: absolute; z-index: 3; width: 100%; height: 100%;" >
									</div>
									<div class="product__category">
										Категория: гантели
									</div>
									<div class="product__price">
										<div class="product__name">
											Гантеля обычная
										</div>
										<div class="value">
											£2500
										</div>
									</div>
									<a href="" class="product__button">
										Добавить в корзину
									</a>
								</div>
							</div>
							<div class="card__column">
								<div class="item__product">
									<div class="product-img">
										<img src="img/fon.jpg" alt="" style="position: relative; z-index: 3;" width="100%" height="100%">
									</div>
									<div class="product__category">
										Категория: штанги
									</div>
									<div class="product__price">
										<div class="product__name">
											Штанга обычная
										</div>
										<div class="value">
											£2500
										</div>
									</div>
									<a href="" class="product__button">
										Добавить в корзину
									</a>
								</div>
							</div>
							<div class="card__column">
								<div class="item__product">
									<div class="product-img">
										<img src="img/fon.jpg" alt="" style="position: relative; z-index: 3;" width="100%" height="100%">
									</div>
									<div class="product__category">
										Категория: перчатки
									</div>
									<div class="product__price">
										<div class="product__name">
											Перчатка необычная
										</div>
										<div class="value">
											£2500
										</div>
									</div>
									<a href="" class="product__button">
										Добавить в корзину
									</a>
								</div>
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="/scripts/slider_init.js"></script>
</body>
</html>