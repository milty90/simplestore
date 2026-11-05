
<?php
header('Content-Type: application/json; charset=utf-8');

 $products = [
      1 => [
          "id" => 1,
          "sku" => "TSHIRT-BLK-01",
          "name" => "Classic Black T-Shirt",
          "size" => [
              "S" => "not available",
              "M" => "available",
              "L" => "available",
              "XL" => "available"
          ],
          "category" => "Tops",
          "description" => "Essential black cotton t-shirt with a modern, clean fit suitable for everyday wear.",
          "price" => 24.99,
          "currency" => "USD",
          "images" => [
              "front" => "public/tshirt_front.webp",
              "detail" => "public/tshirt_detail.webp",
              "folded" => "public/tshirt_folded.webp"
          ]
      ],
      2 => [
          "id" => 2,
          "sku" => "CAP-BLK-01",
          "name" => "Minimalist Black Cap",
          "size" => [
              "S" => "available",
              "M" => "available",
              "L" => "available",
              "XL" => "available"
          ],
          "category" => "Accessories",
          "description" => "Adjustable black baseball cap made from durable cotton twill.",
          "price" => 19.99,
          "currency" => "USD",
          "images" => [
              "front" => "public/cap_front.webp",
              "detail" => "public/cap_detail.webp",
              "folded" => "public/cap_back.webp"
          ]
      ],
      3 => [
          "id" => 3,
          "sku" => "HOODIE-BLK-01",
          "name" => "Classic Black Hoodie",
          "size" => [
              "S" => "available",
              "M" => "available",
              "L" => "available",
              "XL" => "available"
          ],
          "category" => "Tops",
          "description" => "Classic black hoodie made from soft cotton blend with a comfortable fit.",
          "price" => 34.99,
          "currency" => "USD",
          "images" => [
              "front" => "public/hoodie_top.webp",
              "folded" => "public/hoodie_front.webp",
              "detail" => "public/hoodie_detail.webp"
          ]
      ],
      4 => [
          "id" => 4,
          "sku" => "SOCK-BLK-01",
          "name" => "Cotton Crew Socks Set",
          "size" => [
              "S" => "available",
              "M" => "available",
              "L" => "available",
              "XL" => "available"
          ],
          "category" => "Accessories",
          "description" => "Comfortable, breathable black cotton crew socks with ribbed cuffs.",
          "price" => 12.99,
          "currency" => "USD",
          "images" => [
              "front" => "public/socks_side.webp",
              "detail" => "public/socks_detail.webp",
              "folded" => "public/socks_folded.webp"
          ]
      ],
      5 => [
          "id" => 5,
          "sku" => "JCKT-BLK-01",
          "name" => "Hooded Technical Jacket",
          "size" => [
              "S" => "available",
              "M" => "available",
              "L" => "available",
              "XL" => "available"
          ],
          "category" => "Outerwear",
          "description" => "All-weather hooded black jacket featuring water-resistant fabric and full-zip closure.",
          "price" => 119.99,
          "currency" => "USD",
          "images" => [
              "front" => "public/jacket_front.webp",
              "detail" => "public/jacket_detail.webp",
              "folded" => "public/jacket_folded.webp"
          ]
      ],
      6 => [
          "id" => 6,
          "sku" => "PNT-BLK-01",
          "name" => "Slim Fit Black Chinos",
          "size" => [
              "S" => "available",
              "M" => "available",
              "L" => "available",
              "XL" => "available"
          ],
          "category" => "Bottoms",
          "description" => "Versatile black chino pants crafted from stretch-cotton for maximum comfort.",
          "price" => 59.99,
          "currency" => "USD",
          "images" => [
              "front" => "public/pants_front.webp",
              "detail" => "public/pants_detail.webp",
              "folded" => "public/pants_folded.webp"
          ]
      ],
      7 => [
          "id" => 7,
          "sku" => "BLZ-BLK-01",
          "name" => "Tailored Black Blazer",
          "size" => [
              "S" => "available",
              "M" => "available",
              "L" => "not available",
              "XL" => "available"
          ],
          "category" => "Outerwear",
          "description" => "Classic single-breasted black blazer suitable for smart-casual and formal occasions.",
          "price" => 149.99,
          "currency" => "USD",
          "images" => [
              "front" => "public/blazer_front.webp",
              "detail" => "public/blazer_detail.webp",
              "folded" => "public/blazer_folded.webp"
          ]
      ],
      8 => [
          "id" => 8,
          "sku" => "BLSE-BLK-01",
          "name" => "Minimalist Black Women Blouse",
          "size" => [
              "S" => "not available",
              "M" => "available",
              "L" => "available",
              "XL" => "available"
          ],
          "category" => "Tops",
          "description" => "Elegant black blouse designed for women, featuring a minimalist style and comfortable fit.",
          "price" => 29.99,
          "currency" => "USD",
          "images" => [
              "front" => "public/blouse_front.webp",
              "detail" => "public/blouse_detail.webp",
              "folded" => "public/blouse_folded.webp"
          ]
      ],
      9 => [
          "id" => 9,
          "sku" => "CHNS-BLK-01",
          "name" => "Black Women Chinos",
          "size" => [
              "S" => "available",
              "M" => "available",
              "L" => "not available",
              "XL" => "available"
          ],
          "category" => "Bottoms",
          "description" => "Stylish black chinos for women, offering a comfortable fit and versatile style suitable for various occasions.",
          "price" => 39.99,
          "currency" => "USD",
          "images" => [
              "front" => "public/chinos_front.webp",
              "detail" => "public/chinos_detail.webp",
              "folded" => "public/chinos_folded.webp"
          ]
      ],
      10 => [
          "id" => 10,
          "sku" => "SKRT-BLK-01",
          "name" => "Black Women Skirt",
          "size" => [
              "S" => "available",
              "M" => "not available",
              "L" => "available",
              "XL" => "available"
          ],
          "category" => "Bottoms",
          "description" => "Classic black skirt for women, designed for a comfortable fit and versatile style.",
          "price" => 19.99,
          "currency" => "USD",
          "images" => [
              "front" => "public/skirt_front.webp",
              "detail" => "public/skirt_detail.webp",
              "folded" => "public/skirt_folded.webp"
          ]
      ],
      11 => [
          "id" => 11,
          "sku" => "DRSS-BLK-01",
          "name" => "Black Women Dress",
          "size" => [
              "S" => "available",
              "M" => "available",
              "L" => "not available",
              "XL" => "not available"
          ],
          "category" => "Dresses",
          "description" => "Elegant black dress for women, designed for a comfortable fit and versatile style.",
          "price" => 19.99,
          "currency" => "USD",
          "images" => [
              "front" => "public/dress_front.webp",
              "detail" => "public/dress_detail.webp",
              "folded" => "public/dress_folded.webp"
          ]
      ]
  ];
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id !== null) {
    if ($id && isset($products[$id])) {
        echo json_encode($products[$id], JSON_UNESCAPED_UNICODE);
    } else {
        http_response_code(404);
        echo json_encode(["error" => "Nem található"]);
    }
    exit;
}

echo json_encode($products, JSON_UNESCAPED_UNICODE);