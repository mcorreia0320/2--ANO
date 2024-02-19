import 'package:flutter/material.dart';
import 'package:ficha6/data_objects/products.dart';
import 'package:ficha6/globals.dart';

class ProductDetails extends StatelessWidget
{
  final Products products;

  const ProductDetails({
    required this.products,
    super.key
  });

  @override
  Widget build(BuildContext context) {
    final String myURL = "${Globals.baseURL}${products.img}";

    return Column(
      crossAxisAlignment: CrossAxisAlignment.stretch,
      children: [
        Text(products.name),
        const SizedBox(height: 10),
        Image.network(myURL),
        const SizedBox(height: 10),
        Text(products.descricao),
        const SizedBox(height: 10),
        Text("€ ${products.preco.toString()}"),
      ],
    );
  }
}