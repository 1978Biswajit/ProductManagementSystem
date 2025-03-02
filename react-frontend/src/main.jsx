import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import App from './App.jsx'
import './index.css';

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <App />
  </StrictMode>,
)
const apiBaseUrl = import.meta.env.VITE_API_BASE_URL;
console.log(apiBaseUrl); // Output: http://localhost:8000/api