# Chatscript

## 1. CS(chatscript) 설치
 https://sourceforge.net/projects/chatscript/files/ 에서 다운 가능
 
## 2. 개발환경 구축
 #### 1) 문서편집기
 문서편집기 다운(UTF-8을 지원하는 편집기라면 무엇이든 상관X) 메모장도 가능하지만 저는 Notepad++을 사용합니다.
 
 인코딩에서 UTF-8(BOM없음)로 변환 선택하고 저장을 누르면 UTF-8형식으로 저장됨.
 
 #### 2) 콘솔
 cmd.exe 는 UTF-8을 안정적으로 지원 못하기에 ConEmu를 설치하여 사용.
 
 settings.. -> 왼쪽 startup의 environment에서
 - chcp 6501
 - alias cs = cd c:\users\윈도우 사용자 계정\documents\cs\chatscript\binaries 
 
 위 두줄을 추가
 
 chcp 65001 이 UTF-8로 문자세트를 자동으로 바꾸라는 소리인데(chcp : change cord page)  이래도 한글을 UTF-8로 입력은 안됨.. 그래서 입력하려면
 UTF-8로 저장한 파일을 읽거나 웹브라우저를 통해 입력해야함..
 
 #### 3) 웹서버 및 php 파일 설치
 
 https://exagen.tistory.com/attachment/cfile7.uf@27796033574CC7E910DF77.zip 여기서...
  
 readme 대로 따라한 후 나머지 2개의 파일을 웹서버의 htdocs폴더에 복사해 넣는다!. 그후 
 http://127.0.0.1/testbot.php 
 
 여기서 주의사항은  https:// 로 접근 안됨!
 
 그리고 향후 실행할 때, Conemu에서 콘솔창을 두개를 띄워서
 
 1번 콘솔은 cs-> chatscript 후 개발..(명령어실행)
 
 2번 콘솔은 cs -> chatscript port=1024 userlog 라고 입력하여 웹서버와 통신
 
 그리고 웹브라우저를 열어 대화를 테스트하면 끝~~
 
 만약 웹브라우저로 안하고 한글 대화 넣으려면 대충 test.txt 파일 만든다음에 :source test.txt 하면됨.
 
 그 이후 자세한 사항은 아래 블로그 참고..
 
 https://exagen.tistory.com/m/category/6%EC%9E%A5.%20%EC%98%88%EC%A0%9C%20%EC%B1%97%EB%B4%87%20%EB%94%B0%EB%9D%BC%ED%95%98%EA%B8%B0
