import 'package:flutter/material.dart';

class Home extends StatelessWidget {
  const Home({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text("Hello Word"),
        centerTitle: true,
        backgroundColor: Colors.blue[200],
      ),
      body: Column(
        children: [
          const Text("Hello World", 
          style: TextStyle(
            fontSize: 80,
            fontWeight: FontWeight.bold,
            letterSpacing: 2,
            color: Colors.blue,
            fontFamily: 'Bangers'
          ),
          ),
          Image.network("https://ichef.bbci.co.uk/news/1024/cpsprodpb/10403/production/_114936566_coronavirus_index_wolrd_976.png"),
          Image.asset("assets/running.gif"),
        ]
        ),
      floatingActionButton: FloatingActionButton(
        backgroundColor: Colors.blue[200],
        child: const Text("Click Me"),
        onPressed: (){},
      ),
    );
  }
}

