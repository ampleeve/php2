-- == JOIN == --
-- вывести таблицу товаров со значениями категории и атрибутами категории --
use shop;
SELECT * FROM products
	INNER JOIN category ON products.categoryId = category.id;