var url= "http://localhost/bitgob-plataforma/back/public/api/";
var login_path = 'auth/login';



$('#loginForm').submit(function(e){
    e.preventDefault();
    $.post(url + login_path, $('#loginForm').serialize(), 'json')
    .done(function(data){
        console.log(data.token);
        setSession(data.token);
        moveHome();
    })
    .fail(function(jqXHR, textStatus, errorThrown){
        console.log("Error " + errorThrown + "\nEstado " + textStatus);
        console.log(jqXHR);
    });
});

function setSession(token){
    localStorage.setItem('currentUser', JSON.stringify(token));
}

function loadSesion(){
    var sessionStr = localStorage.getItem('currentUser');
    return (sessionStr) ? JSON.parse(sessionStr) : null;
}

function moveHome(){
    window.location = 'home';
}

/*
@Injectable()
export class StorageService {

  private localStorageService;
  private currentSession : Session = null;

  constructor(private router: Router) {
    this.localStorageService = localStorage;
    this.currentSession = this.loadSessionData();
  }

  setCurrentSession(session: Session): void {
    this.currentSession = session;
    this.localStorageService.setItem('currentUser', JSON.stringify(session));
  }

  loadSessionData(): Session{
    var sessionStr = this.localStorageService.getItem('currentUser');
    return (sessionStr) ? <Session> JSON.parse(sessionStr) : null;
  }

  getCurrentSession(): Session {
    return this.currentSession;
  }

  removeCurrentSession(): void {
    this.localStorageService.removeItem('currentUser');
    this.currentSession = null;
  }

  getCurrentUser(): User {
    var session: Session = this.getCurrentSession();
    return (session && session.user) ? session.user : null;
  };

  isAuthenticated(): boolean {
    return (this.getCurrentToken() != null) ? true : false;
  };

  getCurrentToken(): Token {
    var session = this.getCurrentSession();
    return (session && session.token) ? session.token : null;
  };

  logout(): void{
    this.removeCurrentSession();
    this.router.navigate(['/login']);
  }

}
*/