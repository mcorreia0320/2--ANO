import 'package:ficha6/globals.dart';
import 'package:ficha6/widgets/product_card.dart';
import 'package:flutter/material.dart';

class Products extends StatefulWidget
{
  const Products({ super.key });

  @override
  State<Products> createState() => _ProductsState();
}

class _ProductsState extends State<Products> 
{
  void showDetails(int productId) {
    Globals.service.productId = productId;
    Navigator.pushNamed(context, '/LoadDetails');
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.blue[300],
      appBar: AppBar(
        title: Text(
          "MEUS OCULOS",
          style: TextStyle(
            fontSize: 30,
            fontFamily: 'PTSans',
            color: Colors.blue[300],
          ), 
        ),
        backgroundColor: Colors.white,
      ),
      body: Column(
        children: [
          Expanded(
            child: ListView.builder(
              itemCount: Globals.service.products.length,
              itemBuilder: (context, index) => ProductsCard(
                products: Globals.service.products[index],
                showDetails: () => showDetails(Globals.service.products[index].id),
              ),
            ),
          )
        ],
      )
    );
  }
}