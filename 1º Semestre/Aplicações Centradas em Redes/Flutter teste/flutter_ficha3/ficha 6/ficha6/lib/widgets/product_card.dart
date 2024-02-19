import 'package:flutter/material.dart';
import 'package:ficha6/data_objects/products.dart';
import 'package:ficha6/globals.dart';

class ProductsCard extends StatelessWidget
{
  final Products products;
  final Function() showDetails;

  const ProductsCard({
    required this.products,
    required this.showDetails,
    super.key
  });

  @override
  Widget build(BuildContext context) {
    final String myURL = "${Globals.baseURL}${products.img}";

    return Card(
      margin: const EdgeInsets.all(10),
      child: ListTile(
        title: Text("${products.name} €${products.preco}"),
        leading: Image.network(myURL),
        onTap: showDetails,
      ),
    );
  }
}