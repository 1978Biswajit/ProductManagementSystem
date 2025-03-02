import React from 'react';
import { useAuth } from '../context/AuthContext';

const Dashboard = () => {
  const { auth } = useAuth();

  return (
    <div className="min-h-screen flex items-center justify-center bg-gray-100">
      <div className="bg-white p-6 rounded shadow-md">
        <h2 className="text-2xl font-bold mb-4">Welcome to the Dashboard!</h2>
        <p>You are now logged in.</p>
        {auth.user?.role === 'admin' && (
          <button
            onClick={() => window.location.href = '/admin'}
            className="mt-4 bg-blue-500 text-white p-2 rounded"
          >
            Go to Admin Panel
          </button>
        )}
      </div>
    </div>
  );
};

export default Dashboard;