import 'package:flutter/material.dart';

int fizzbuzz(int number) {
  if (number < 1) {
    return number;
  }
  if (number % 3 == 0) {
    print("fizz");
  } else {
    if (number % 5 == 0) {
      print("buzz");
    } else {
      print(number);
    }
  }
  if (number % 3 == 0 && number % 5 == 0) {
    print("fizzbuzz");
  }
  return fizzbuzz(number - 1);
}

void main() {
  fizzbuzz(15);
}
