# TableBoard_Shop
게시판-Shop 의 TODO 완성하기!

## 기존 파일
```
 .
├── css - board_form.php와 index.php 에서 사용하는 stylesheet
│   └── ...
├── fonts - 폰트
│   └── ...
├── images - 아이콘 이미지
│   └── ...
├── vender - 외부 라이브러리
│   └── ...
├── js - board_form.php와 index.php 에서 사용하는 javascript
│   └── ...
├── function
│   └── insert.php - 게시글 작성 기능 구현
│   └── update.php - 게시글 수정 기능 구현
│   └── delete.php - 게시글 삭제 기능 구현
├── board_form.php - 게시글 작성/수정 시 사용하는 form이 포함된 php 파일
├── index.php - 게시글 조회 기능 구현
```

## MySQL 테이블 생성!

[여기에 테이블 생성 시, 사용한 Query 를 작성하세요.]
Note: 
- table 이름은 tableboard_shop 으로 생성
- 기본키는 num 으로, 그 외의 속성은 board_form.php 의 input 태그 name 에 표시된 속성 이름으로 생성
- 각 속성의 type 은 자유롭게 설정 (단, 입력되는 값의 타입과 일치해야 함)
    - ex) price -> int
    - ex) name -> char or varchar
    
## index.php 수정
sql문을 이용하여 제가 생성한 kuh_db라는 데이터베이스에 connect시키고 그 안에 있는 tableboard_shop이라는
테이블에 값을 num값을 기준으로하여 내림차순으로 값을 가져오도록 쿼리문을 실행시켰습니다.

쿼리문으로 가져온 값들을 mysql_fetch_array함수를 사용해 항 행씩 값을 받아오도록 하여 테이블 안에 저장된 값들을
화면에 출력하였습니다.

(여기서 페이지 출력을 볼때 iphon 64 gray위로부터 데이터베이스에 해당되는 내용입니다.!!)

## board_form.php 수정
index.php와 같이 데이터베이스에 connect시켰습니다. index.php로 부터 받아온 num값을 통해 num값에 해당하는
행의 값들을 불러와 출력하도록 하였습니다. 받아온 num값을 통해 mysql_fetch_array로 값들을 받아 클릭된 정보에 
해당하는 값들을 유지하여 출력하는 수정창을 열도록 하였습니다.

## function
### insert.php 수정
위에서 사용하는 데이터베이스와 connect를 시킵니다. 그 후
$sql = "insert into tableboard_shop (num, date, name, order_id, price, quantity)";

$sql .= "values ('$_POST[num]', '$_POST[date]', '$_POST[name]', '$_POST[order_id]', '$_POST[price]', '$_POST[quantity]')";
과 같은 쿼리문장을 사용하여 실행시키면 해당하는 속성들에 입력받은 값들을 데이터베이스에 저장할 수 있습니다.

### update.php 수정
위에서 사용하는 데이터베이스와 connet시킵니다.    
그 후 update tableboard_shop set date라는 쿼리문을 사용하여 해당하는 속성들에 입력받은 
값들을 넣어서 수정할 수 있도록 변경하였습니다.

### delete.php 수정
위에서 사용하는 데이터베이스와 connet시킵니다.  
그 후 delete from tableboard_shop where num =  $num라는 쿼리문을 사용하여 받아온 num값에 해당하는 테이블
레코드를 삭제시키도록 변경하였습니다.
