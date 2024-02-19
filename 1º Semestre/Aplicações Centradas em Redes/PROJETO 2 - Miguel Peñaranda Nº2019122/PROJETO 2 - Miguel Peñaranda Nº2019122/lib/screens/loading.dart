import 'package:flutter/material.dart';
import 'package:ficha6/globals.dart';
import 'package:flutter_spinkit/flutter_spinkit.dart';

class Loading extends StatefulWidget
{
  const Loading({super.key});

  @override
  State<Loading> createState() => _LoadingState();
}

class _LoadingState extends State<Loading>
{
  void setupService() async {
    if(Globals.nextRoute == "/Products") {
      await Globals.service.getProducts();
    } 
    else if (Globals.nextRoute == "/Details"){
      await Globals.service.getCurrentProduct();
    }
    finishLoading();
  }

  void finishLoading() {
    Navigator.pushReplacementNamed(context, Globals.nextRoute);
  }

  @override
  void initState() {
    super.initState();
    setupService();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.blue[300],
      body: const Center(
        child: SpinKitCircle(
          color: Colors.white,
          size: 300,
        ),
      ),
    );
  }
}