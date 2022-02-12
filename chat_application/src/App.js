import { ChatEngine } from 'react-chat-engine';

import ChatFeed from './components/ChatFeed';

import './App.css' ;

const App = () => {
    return (
        <ChatEngine
            height="100vh"
			userName='KerimicaLjubimica'
			userSecret='maslenica'
			projectID='76d27ce1-a79d-4622-83fe-d3a96a8a54cb'
            renderChatFeed={(chatAppProps) => <ChatFeed {...chatAppProps}  />}
        />
    );
}

export default App;