# Задание 3. Итераторы, магия

## Техническое задание

Необходимо создать класс Person со свойствами и методами (можно взять из предыдущих заданий).
Далее необходимо:
* провести работу с объектами класса Person и их сериализацией, т.е.
    * добавляем работу с магическими методами __get(), __set(), __sleep() и __wakeup() 
    * создаем объект
    * сериализуем его
    * выводим в строку
    * меняем в строке какое нибудь значение (например, логин) с помощью str_replace (для интереса можно проверить как оно будет
    работать со строкой такого же размера и со строкой другого размера)
    * десериализуем объект и выводим его свойства

* создаем дополнительный класс, который будет представлять собой список людей - PeopleList
* также мы хотим реализовать этот класс как итерируемый - чтобы выводить объекты Person
 приходилось не через явное обращение, а через foreach, поэтому прикручиваем работу с интерфейсом Iterator (подсказка, 
 чтобы удобнее выводить Person через echo, можно добавить тому работу с методом __toString())  


**Обратите внимание на** [**рекомендации по сдаче домашнего задания**](../homework.md). 