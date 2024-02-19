import 'package:flutter/material.dart';
import 'package:ficha6/data_objects/products.dart';
import 'package:ficha6/globals.dart';
import 'package:cached_network_image/cached_network_image.dart';

class ProductDetails extends StatelessWidget {
  final Products products;

  const ProductDetails({
    required this.products,
    Key? key,
  }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    final String myURL = "${Globals.baseURL}${products.image}";
    return SingleChildScrollView(
      padding: const EdgeInsets.all(25),
      child: Card(
        elevation: 4,
        margin: const EdgeInsets.all(10),
        shape: RoundedRectangleBorder(
          borderRadius: BorderRadius.circular(10),
        ),
        child: Container(
          padding: const EdgeInsets.all(25),
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.stretch,
            children: [
              Text(
                " ${products.marca} ",
                style: TextStyle(
                  fontSize: 40,
                  fontWeight: FontWeight.bold,
                  fontFamily: 'PTSans',
                  color: Colors.blue[400],
                ),
                textAlign: TextAlign.center,
              ),
              Text(
                " ${products.modelo} ",
                style: TextStyle(
                  fontSize: 25,
                  fontWeight: FontWeight.bold,
                  fontFamily: 'PTSans',
                  color: Colors.lightBlue[300],
                ),
                textAlign: TextAlign.center,
              ),
              const SizedBox(height: 10),
              CachedNetworkImage(
                imageUrl: myURL,
                placeholder: (context, url) => const CircularProgressIndicator(),
                errorWidget: (context, url, error) => const Icon(Icons.error),
                height: 300,
              ),
              const SizedBox(height: 10),
              Text(
                products.description,
                style: const TextStyle(
                  fontSize: 18,
                  color: Colors.black,
                  fontFamily: 'PTSans',
                  fontWeight: FontWeight.w400,
                  letterSpacing: 1,
                ),
                textAlign: TextAlign.justify,
              ),
              const SizedBox(height: 10),
              buildListItem("Material", products.material),
              const SizedBox(height: 10),
              buildListItem("Color", products.color),
              const SizedBox(height: 10),
              Container(
                padding: const EdgeInsets.symmetric(vertical: 8, horizontal: 16),
                decoration: BoxDecoration(
                  color: Colors.blue[300],
                  borderRadius: BorderRadius.circular(20),
                ),
                child: Text(
                  " ${products.price.toString()}€",
                  style: const TextStyle(
                    fontSize: 30,
                    color: Colors.white,
                    fontFamily: 'PTSans',
                    fontWeight: FontWeight.bold,
                  ),
                  textAlign: TextAlign.center,
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }

  Widget buildListItem(String title, String content) {
    return RichText(
      text: TextSpan(
        children: [
          const TextSpan(
            text: "• ",
            style: TextStyle(
              fontFamily: 'PTSans',
              color: Colors.black
            ),
          ),
          TextSpan(
            text: "$title: $content",
            style: const TextStyle(
              fontSize: 18,
              fontFamily: 'PTSans',
              color: Colors.black
            ),
          ),
        ],
      ),
    );
  }
}
