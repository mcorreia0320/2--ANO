
import 'package:ficha6/screens/loading.dart';
import 'package:ficha6/screens/product_details.dart';
import 'package:ficha6/screens/products.dart';
import 'package:flutter/material.dart';
import 'package:ficha6/globals.dart';

void main() {
  runApp(MaterialApp(
    initialRoute: '/',
    routes: {
      '/': (context) => const Loading(),
      '/Products':(context) => const Products(),
      '/Details':(context) => const Details(),
      '/LoadDetails':(context) {
      Globals.nextRoute = '/Details';
      return const Loading();
      }
    },
  ));
}

