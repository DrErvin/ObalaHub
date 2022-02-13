import { ChatEngine } from 'react-chat-engine';
import LoginForm from './components/LoginForm'
import ChatFeed from './components/ChatFeed';

import './App.css' ;

const App = () => {

    if(!localStorage.getItem('username')) return <LoginForm />

    return (
        <ChatEngine
            height="100vh"
			userName={localStorage.getItem('username')}
			userSecret={localStorage.getItem('password')}
			projectID='76d27ce1-a79d-4622-83fe-d3a96a8a54cb'
            renderChatFeed={(chatAppProps) => <ChatFeed {...chatAppProps}  />}
        />
    );
}

export default App;