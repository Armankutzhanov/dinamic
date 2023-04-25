Тестовое задание  					Mediana Services Limited

Задача: Нужно спроектировать каталог товаров, корзину и заказы для интернет-магазина. Затем реализовать для него JSON API. Для реализации использовать фреймворк Laravel.  

Требования к структуре каталога:
●	Каталог состоит из дерева категорий (максимальная вложенность – 3) и товаров, которые принадлежат к одной из категорий второго/третьего уровня. Товары должны иметь следующие поля:
●	Название 
●	Описание 
●	Автогенерируемый slug 
●	Категория второго/третьего уровня 
●	Цена
●	Несколько дополнительных характеристики (например длина, ширина, вес). 

Требования к корзине и заказам.
●	Взаимодействовать с корзиной и оформлять заказы могут как авторизованные, так и неавторизованные пользователи. 
●	Заказы должны содержать контактную информацию покупателя (например email и телефон), а также список купленных товаров. 
●	Для авторизированных пользователей контактная информация должна подтягиваться из профиля автоматически. 

Требования к API.
API должно поддерживать авторизацию (рекомендуется использовать пакет Sanctum). ✔
Рекомендуемый состав методов API.
●	Методы для регистрации/авторизации пользователей. 
●	Метод для получения дерева категорий. 
●	Метод для получения товаров. Должен поддерживать фильтрацию по категории/категориям любого уровня, а также по цене и дополнительным характеристикам. Значения фильтров должны валидироваться. 
●	Метод для получения товара по slug. 
●	Методы для работы с корзиной (добавление товара, редактирование количества товара/товаров, удаление товара). 
●	Метод для оформления заказа. 
●	Метод для получения списка заказов авторизированного пользователя. 


Дополнительная информация:

1.	Будет плюсом, если дополнительные характеристики товаров будут вынесены в отдельную таблицу, а также будет реализовано API (не требующее авторизации) для добавления/удаления данных характеристик. При этом должны работать динамические фильтры для этих характеристик в методе получения товаров. 
2.	Будет плюсом, если будут написаны сидеры для каталога товаров. 
3.	Сдать задание через Git
4.	Желательно приложить небольшую документацию к API (рекомендуется использовать Postman).
P.S. Выполните задачи по мере своей возможности. От этого будет зависит ваш уровень и зарплатная категория

