import 'package:flutter/material.dart';
import 'package:ficha6/data_objects/products.dart';
import 'package:ficha6/globals.dart';
import 'package:cached_network_image/cached_network_image.dart';

class ProductsCard extends StatelessWidget {
  final Products products;
  final Function() showDetails;

  const ProductsCard({
    required this.products,
    required this.showDetails,
    Key? key,
  }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    final String myURL = "${Globals.baseURL}${products.image}";

    return Card(
      elevation: 4,
      margin: const EdgeInsets.all(12.5),
      shape: RoundedRectangleBorder(
        borderRadius: BorderRadius.circular(10),
      ),
      child: InkWell(
        onTap: showDetails,
        child: Padding(
          padding: const EdgeInsets.all(16),
          child: Row(
            crossAxisAlignment: CrossAxisAlignment.center,
            children: [
              CircleAvatar(
                radius: 50,
                child: ClipOval(
                  child: CachedNetworkImage(
                    imageUrl: myURL,
                    fit: BoxFit.cover,
                    placeholder: (context, url) => const CircularProgressIndicator(),
                    errorWidget: (context, url, error) => const Icon(Icons.error),
                  ),
                )
              ),
              const SizedBox(width: 16),
              Expanded(
                child: Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: [
                    Text(
                      " ${products.marca} ",
                      style: TextStyle(
                        fontSize: 18,
                        fontWeight: FontWeight.bold,
                        fontFamily: 'PTSans',
                        color: Colors.blue[400],
                      ),
                    ),
                    Text(
                      " ${products.modelo} ",
                      style: TextStyle(
                        fontSize: 14,
                        fontWeight: FontWeight.bold,
                        fontFamily: 'PTSans',
                        color: Colors.lightBlue[300],
                      ),
                    ),
                    const SizedBox(height: 8),
                    Text(
                      "Color: ${products.color}, Material: ${products.material}, Price: ${products.price.toString()} €",
                      style: const TextStyle(
                        fontSize: 13,
                        color: Color.fromARGB(255, 73, 73, 73),
                        fontFamily: 'PTSans',
                        fontWeight: FontWeight.w100,
                        
                      ),
                    ),
                  ],
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
