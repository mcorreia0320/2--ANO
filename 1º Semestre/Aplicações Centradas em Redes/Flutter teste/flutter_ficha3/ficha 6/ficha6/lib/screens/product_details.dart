import 'package:ficha6/globals.dart';
import 'package:ficha6/widgets/product_details.dart';
import 'package:flutter/material.dart';


class Details extends StatefulWidget 
{
  const Details({super.key});

  @override
  State<Details> createState() => _DetailsState();
}

class _DetailsState extends State<Details>
{
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.amber[600],
      appBar: AppBar(
        title: const Text("Detalhes do Produto"),
        backgroundColor: Colors.lightBlue[800],
      ),
      body: Column(
        children: [
          Expanded(
            child: ProductDetails(
              products: Globals.service.product,
            ),
          )
        ],
      ),
    );
  }
}