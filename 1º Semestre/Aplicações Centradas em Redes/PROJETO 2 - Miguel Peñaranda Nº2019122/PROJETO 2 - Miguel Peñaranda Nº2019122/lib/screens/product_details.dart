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
      backgroundColor: Colors.blue[300],
      appBar: AppBar(
        title: Text(
          "DETALHES DE ${Globals.service.product.marca} ", 
          style: TextStyle(
            color: Colors.blue[300], 
            fontWeight: FontWeight.w800,
            fontFamily: 'PTSans'
          )
        ),
        backgroundColor: Colors.white,
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