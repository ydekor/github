import 'package:flutter/material.dart';

anagram<T>(String word, String word2) {
  word = word.toUpperCase();
  word2 = word2.toUpperCase();
  if (word.substring(0, 1) != word2.substring(word.length - 1, 1)) {
    return false;
  }
  if (word.length < 2) {
    return true;
  }
  word = word.substring(1, 1);
  word2 = word.substring(word2.length - 1, 1);
  return anagram(word, word2);
}

void main() {
  anagram("finder", "Friend");
  anagram("hello", "bye");
  anagram("f? inder", "Friend");
}

