<?php
def celsius_to_fahrenheit(celsius):
    fahrenheit = celsius * 9/5 + 32
    return fahrenheit

def fahrenheit_to_celsius(fahrenheit):
    celsius = (fahrenheit - 32) * 5/9
    return celsius

print("Выберите вариант конвертации температуры:")
print("1. Из градусов Цельсия в градусы Фаренгейта")
print("2. Из градусов Фаренгейта в градусы Цельсия")

choice = int(input("Ваш выбор (1/2): "))

if choice == 1:
    celsius = float(input("Введите температуру в градусах Цельсия: "))
    fahrenheit = celsius_to_fahrenheit(celsius)
    print(f"Температура в градусах Фаренгейта: {fahrenheit}")
elif choice == 2:
    fahrenheit = float(input("Введите температуру в градусах Фаренгейта: "))
    celsius = fahrenheit_to_celsius(fahrenheit)
    print(f"Температура в градусах Цельсия: {celsius}")
else:
    print("Некорректный выбор. Пожалуйста, выберите 1 или 2.")
?>