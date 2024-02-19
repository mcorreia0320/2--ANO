import 'package:flutter/material.dart';
import 'post.dart';

void main() {
  runApp(const MaterialApp(
    home: Blog(),
  ));
}

class Blog extends StatefulWidget {
  const Blog({super.key});

  @override
  State<Blog> createState() => _BlogState();
}

class _BlogState extends State<Blog> {
  @override
  Widget build(BuildContext context) {
    List<Post> posts = [
      Post(id: 1, userID: 1, title: "My First Post", body: "This is my first post"),
      Post(id: 2, userID: 1, title: "My Second Post", body: "This is my second post"),
      Post(id: 3, userID: 1, title: "My Third Post", body: "This is my third post"),
      Post(id: 4, userID: 1, title: "My Fourth Post", body: "This is my fourth post"),
    ];
    
    
    return Scaffold(
      appBar: AppBar(
        title: const Text('My Blog', style: TextStyle(color: Colors.white, fontWeight: FontWeight.bold)),
        centerTitle: true,
        backgroundColor: Colors.blue[200],
      ),
      body: Column(
        children: posts.map((post) { return post.toCard(); }).toList(),
      )
    );
  }
}

